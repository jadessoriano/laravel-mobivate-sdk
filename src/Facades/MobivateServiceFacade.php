<?php

declare(strict_types=1);

namespace Jadessoriano\LaravelMobivate\Facades;

use Illuminate\Support\Facades\Facade;
use Jadessoriano\LaravelMobivate\LaravelMobivateService;

/**
 * @mixin \Jadessoriano\LaravelMobivate\LaravelMobivateService
 */
class MobivateServiceFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LaravelMobivateService::class;
    }
}
