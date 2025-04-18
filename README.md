![Mobivate SDK for Laravel](https://github.com/user-attachments/assets/4dfd52ed-5406-4493-b56c-895cf44d430b)

# Mobivate SDK for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jadessoriano/laravel-mobivate-sdk.svg?style=flat-square)](https://packagist.org/packages/jadessoriano/laravel-mobivate-sdk)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jadessoriano/laravel-mobivate-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jadessoriano/laravel-mobivate-sdk/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jadessoriano/laravel-mobivate-sdk/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jadessoriano/laravel-mobivate-sdk/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jadessoriano/laravel-mobivate-sdk.svg?style=flat-square)](https://packagist.org/packages/jadessoriano/laravel-mobivate-sdk)
<!--delete-->
---
This package uses [jadessoriano/mobivate-sdk-php](https://github.com/jadessoriano/mobivate-sdk-php)
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
];
```

## Usage

```php
$variable = new VendorName\Skeleton();
echo $variable->echoPhrase('Hello, VendorName!');
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
