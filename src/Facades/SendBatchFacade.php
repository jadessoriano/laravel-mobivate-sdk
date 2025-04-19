<?php

declare(strict_types=1);

namespace Jadessoriano\LaravelMobivate\Facades;

use Illuminate\Support\Facades\Facade;
use Jadessoriano\Mobivate\Client\Sms\SendBatch;

/**
 * @mixin \Jadessoriano\Mobivate\Client\Sms\SendBatch
 */
class SendBatchFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SendBatch::class;
    }
}
