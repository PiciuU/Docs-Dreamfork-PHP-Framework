<?php

namespace Framework\Support\Facades;

class DB extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'db';
    }
}