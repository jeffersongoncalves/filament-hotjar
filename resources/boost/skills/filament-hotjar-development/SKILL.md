---
name: filament-hotjar-development
description: Build and work with the Filament Hotjar plugin — Hotjar settings page, head script injection and site ID management in Filament panels.
---

# Filament Hotjar Development

## When to use this skill

Use this skill when:
- Adding or changing the Hotjar integration of a Filament panel
- Customizing the Hotjar settings page
- Debugging missing Hotjar tracking code in a panel

## Package Overview

- **Package**: `jeffersongoncalves/filament-hotjar` (branch `3.x` for Filament 5.x)
- **Namespace**: `JeffersonGoncalves\Filament\Hotjar`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^3.0`, `jeffersongoncalves/laravel-hotjar:^1.0`
- **Service Provider**: `JeffersonGoncalves\Filament\Hotjar\HotjarServiceProvider`

## Version Compatibility

| Branch | Filament | PHP |
|--------|----------|-----|
| 1.x | 3.x | ^8.2 |
| 2.x | 4.x | ^8.2 |
| 3.x | 5.x | ^8.2 |

## Setup

```php
use JeffersonGoncalves\Filament\Hotjar\HotjarPlugin;

$panel->plugins([
    HotjarPlugin::make(),                        // settings page + script injection
    // HotjarPlugin::make()->settingsPage(false), // script injection only
]);
```

```bash
php artisan vendor:publish --tag=hotjar-settings-migrations
php artisan migrate
```

## Settings Fields

| Field | Type | Description |
|-------|------|-------------|
| `site_id` | TextInput (digits) | Hotjar Site ID; empty disables tracking |
| `version` | TextInput (integer) | Tracking snippet version (`hjsv`), default 6 |

## Troubleshooting

- **Script missing**: check `site_id` is saved and `HotjarServiceProvider` is discovered; the `hotjar::script` view comes from `laravel-hotjar`.
- **Settings page errors**: the `hotjar` settings group is missing — publish and run the migrations.
