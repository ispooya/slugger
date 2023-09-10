<?php

namespace Ispooya\Slugger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Ispooya\Slugger\Services\Slugger make(string $value, string $separator)
 */
class Slugger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return "slugger";
    }
}
