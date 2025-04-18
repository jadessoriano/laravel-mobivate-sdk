<?php

declare(strict_types=1);

namespace Jadessoriano\LaravelMobivate\Facades;

use Illuminate\Support\Facades\Facade;
use Jadessoriano\Mobivate\MobivateClient;

/**
 * @mixin \Jadessoriano\Mobivate\MobivateClient
 */
class ClientFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return MobivateClient::class;
    }
}
