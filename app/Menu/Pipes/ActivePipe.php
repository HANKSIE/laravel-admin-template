<?php
namespace App\Menu\Pipes;
use App\Contracts\Pipe;

class ActivePipe implements Pipe {
    public function handle($item){
        if($subMenu = $item['submenu'] ?? null){
            $item['is_active'] ??= false;
        }else{
            $item['is_active'] = collect($subMenu)->contains(fn($item) => $item['is_active'] === true);
        }
        
        return $item;
    }
}