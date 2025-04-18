<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Http;
use Jadessoriano\LaravelMobivate\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function () {
        Http::preventStrayRequests();

        config([
            'mobivate-sdk.api_key' => 'api-xxxx',
        ]);
    })
    ->in(__DIR__);
