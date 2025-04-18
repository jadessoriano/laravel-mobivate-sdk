<?php

declare(strict_types=1);

namespace Jadessoriano\LaravelMobivate\Facades;

use Illuminate\Support\Facades\Facade;
use Jadessoriano\Mobivate\Client\Sms\SendSingle;

/**
 * @mixin \Jadessoriano\Mobivate\Client\Sms\SendSingle
 */
class SendSingleFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SendSingle::class;
    }
}
