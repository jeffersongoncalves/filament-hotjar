<div class="filament-hidden">

![Filament Hotjar](https://raw.githubusercontent.com/jeffersongoncalves/filament-hotjar/2.x/art/jeffersongoncalves-filament-hotjar.png)

</div>

# Filament Hotjar

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-hotjar.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-hotjar)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-hotjar/fix-php-code-style-issues.yml?branch=2.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-hotjar/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-hotjar.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-hotjar)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-hotjar.svg?style=flat-square)](LICENSE.md)

Filament plugin for [Hotjar](https://www.hotjar.com) with a settings page powered by [Spatie Laravel Settings](https://github.com/spatie/laravel-settings). Manage your Hotjar site ID directly from the Filament admin panel, and the tracking code is injected into every page of your panels.

Built on top of [jeffersongoncalves/laravel-hotjar](https://github.com/jeffersongoncalves/laravel-hotjar).

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-hotjar:"^2.0"
```

Publish the settings migrations and run them:

```bash
php artisan vendor:publish --tag=hotjar-settings-migrations
php artisan migrate
```

## Usage

### Register the Plugin

Add the plugin to your Filament panel provider:

```php
use JeffersonGoncalves\Filament\Hotjar\HotjarPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            HotjarPlugin::make(),
        ]);
}
```

The plugin will:
- Register a **Settings Page** where you can manage the Hotjar site ID and snippet version
- Automatically inject the Hotjar tracking code into the `<head>` of your Filament panels (only when a site ID is set)

### Disable the Settings Page

If you only want the automatic script injection without the settings page:

```php
HotjarPlugin::make()
    ->settingsPage(false),
```

## Requirements

- PHP 8.2 or higher
- Filament 4.x

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
