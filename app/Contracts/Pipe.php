<?php
namespace App\Contracts;

interface Pipe
{
    /**
     * Transforms a menu item in some way.
     *
     * @param  array  $item  A menu item
     * @return array The transformed menu item
     */
    public function handle($item);
}