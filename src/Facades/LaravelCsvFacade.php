<?php

namespace Openkeycode\Laravelcsv\Facade;
use Illuminate\Support\Facades\Facade;

class LaravelCsvFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'openkeycode.laravel-scv';
    }
}