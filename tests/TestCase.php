<?php

declare(strict_types=1);

namespace Jadessoriano\LaravelMobivate\Tests;

use Jadessoriano\LaravelMobivate\LaravelMobivateServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelMobivateServiceProvider::class,
        ];
    }
}
