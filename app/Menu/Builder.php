<?php
namespace App\Menu;
use App\Contracts\Pipe;
use Illuminate\Support\Facades\Pipeline;
use Illuminate\Support\Arr;
class Builder {
    protected array $pipes;
    public function __construct() {
        $pipes = collect(config('adminpanel.menu_pipes'))->map(fn($class) => app($class))->all();
        $this->pipes = $this->preparePipes($pipes);
    }

    public function handle(array $item){
        if(Arr::isAssoc($item)){
            if($submenu = $item['submenu'] ?? null){
                $item['submenu'] = $this->handle($submenu);
            }
            
            return Pipeline::send($item)->through(
                $this->pipes
            )->thenReturn();;
        }
        
        return collect($item)->map(fn($item) => $this->handle($item))->all();
    }

    protected function preparePipes(array $pipes){
        return collect($pipes)
        ->map(fn(Pipe $pipe) => fn($passable, \Closure $next) => $next($pipe->handle($passable)))
        ->all();
    }
}