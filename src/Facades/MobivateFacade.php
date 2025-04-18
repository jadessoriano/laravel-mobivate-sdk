<?php

declare(strict_types=1);

namespace Jadessoriano\LaravelMobivate\Facades;

use Illuminate\Support\Facades\Facade;
use Jadessoriano\LaravelMobivate\LaravelMobivate;

/**
 * @mixin \Jadessoriano\LaravelMobivate\LaravelMobivate
 */
class MobivateFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LaravelMobivate::class;
    }
}
