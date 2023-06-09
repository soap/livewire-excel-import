# Large Excel file import using Laravel Livewire

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soap/livewire-excel-import.svg?style=flat-square)](https://packagist.org/packages/soap/livewire-excel-import)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/soap/livewire-excel-import/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/soap/livewire-excel-import/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/soap/livewire-excel-import/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/soap/livewire-excel-import/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soap/livewire-excel-import.svg?style=flat-square)](https://packagist.org/packages/soap/livewire-excel-import)

Larage Excel file import using Laravel Livewire. Support drag and drop file upload and attributes mapping as well as realtime import progress report.

## Support us


## Installation

You can install the package via composer:

```bash
composer require soap/livewire-excel-import
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="livewire-excel-import-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="livewire-excel-import-config"
```

This is the contents of the published config file:

```php
return [
    
    /**
     * Options: tailwind | bootstrap-4 | bootstrap-5.
     */
    'theme' => 'tailwind',
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="livewire-excel-import-views"
```

## Usage
In your desired view, put the following livewire component.
```php
@livewire('excel-importer', [
    'model' => App\Models\User::class, 
    'importer' => App\Imports\UsersImport::class
    ])
```

## Testing

```bash
composer test
```
## :wrench: Supported Versions

Versions will be supported for a limited amount of time.

| Version | Laravel Version | PHP Version | Support |
|---- |----|----|----|
| 1.0 | >=9.0| ^8.1 | First Release |


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Prasit Gebsaap](https://github.com/soap)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
