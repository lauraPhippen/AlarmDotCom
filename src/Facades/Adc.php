<?php namespace Calverley\Adc\Facades;

use Illuminate\Support\Facades\Facade;

class Adc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'adc';
    }
}