<?php

declare(strict_types=1);

namespace Jadessoriano\LaravelMobivate;

use Jadessoriano\Mobivate\Client\Credentials\Basic;
use Jadessoriano\Mobivate\MobivateClient;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMobivateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-mobivate-sdk')
            ->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(
            MobivateClient::class,
            fn () => (
                new MobivateClient(
                    new Basic(config()->string('mobivate.api_key'))
                )
            )
        );
    }
}
