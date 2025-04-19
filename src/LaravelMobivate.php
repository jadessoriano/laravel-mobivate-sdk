<?php

declare(strict_types=1);

namespace Jadessoriano\LaravelMobivate;

use Jadessoriano\LaravelMobivate\Facades\ClientFacade;
use Jadessoriano\LaravelMobivate\Facades\SendBatchFacade;
use Jadessoriano\LaravelMobivate\Facades\SendSingleFacade;
use Jadessoriano\Mobivate\Client\Sms\SendBatch as SendBatchClient;
use Jadessoriano\Mobivate\Client\Sms\SendSingle as SendSingleClient;
use Jadessoriano\Mobivate\MobivateClient;

class LaravelMobivate
{
    public function client(): MobivateClient
    {
        /** @phpstan-ignore return.type */
        return ClientFacade::getFacadeRoot();
    }

    public function sendSingle(): SendSingleClient
    {
        /** @phpstan-ignore return.type */
        return SendSingleFacade::getFacadeRoot();
    }

    public function sendBatch(): SendBatchClient
    {
        /** @phpstan-ignore return.type */
        return SendBatchFacade::getFacadeRoot();
    }
}
