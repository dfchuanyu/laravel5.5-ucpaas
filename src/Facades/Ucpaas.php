<?php
namespace Dfchuanyu\Ucpaas\Facades;

use Illuminate\Support\Facades\Facade;

class Ucpaas extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ucpaas';
    }
}
