![Mobivate SDK for Laravel](https://github.com/user-attachments/assets/4dfd52ed-5406-4493-b56c-895cf44d430b)

# Mobivate SDK for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jadessoriano/laravel-mobivate-sdk.svg?style=flat-square)](https://packagist.org/packages/jadessoriano/laravel-mobivate-sdk)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jadessoriano/laravel-mobivate-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jadessoriano/laravel-mobivate-sdk/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jadessoriano/laravel-mobivate-sdk/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jadessoriano/laravel-mobivate-sdk/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jadessoriano/laravel-mobivate-sdk.svg?style=flat-square)](https://packagist.org/packages/jadessoriano/laravel-mobivate-sdk)
<!--delete-->
---
This package uses [jadessoriano/mobivate-sdk-php](https://github.com/jadessoriano/mobivate-sdk-php)

- [Installation](#installation)
- Usage
    - [Send Single SMS Message](#send-single-sms-message)
    - [Send Batch SMS Message](#send-batch-sms-message)
---
<!--/delete-->


## Installation

You can install the package via composer:

```bash
composer require jadessoriano/laravel-mobivate-sdk
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Jadessoriano\LaravelMobivate\LaravelMobivateServiceProvider" --tag="mobivate-sdk-config"
```

This is the contents of the published config file:

```php
return [
    'api_key' => env('MOBIVATE_API_KEY'),
    'originator' => env('MOBIVATE_ORIGINATOR'),
];
```

## [Send Single SMS Message](https://wiki.mobivatebulksms.com/use-cases/send-single-sms-message)

```php

use Mobivate;

Mobivate::sendSingle(
    recipient: '6xxxxxxxxxxx',
    body: 'This is a test message.',
    originator: '6xxxxxxxxxxx',  // Optional: defaults to config value if not provided
    reference: 'sample',         // Optional: defaults to null if not provided
    campaignId: '1-xxx'          // Optional: defaults to null if not provided
);

```

## [Send Batch SMS Message](https://wiki.mobivatebulksms.com/use-cases/send-batch-sms-message)

```php

use Mobivate;

/**
 * Note: The schedule date time (for later delivery) is optional, defaults to null if not provided.
 */
Mobivate::sendBatch(
    messages: [
        new BatchMessageItem(
            originator: 'Test', // Optional: defaults to config value if not provided
            recipient: '44700011122',
            text: 'This is a test message'
        )
    ],
    scheduleDateTime: new DateTime('+5 minutes', new DateTimeZone('Asia/Manila'))
);

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [jadessoriano](https://github.com/jadessoriano)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
