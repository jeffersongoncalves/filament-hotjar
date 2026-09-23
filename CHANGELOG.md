# Changelog

All notable changes to this project will be documented in this file.

## 1.0.0 - 2026-09-23

### First release

A Filament plugin for [Hotjar](https://www.hotjar.com), built on [`jeffersongoncalves/laravel-hotjar`](https://github.com/jeffersongoncalves/laravel-hotjar) and `jeffersongoncalves/filament-analytics-core`.

- **Settings page** (Spatie Laravel Settings) to manage the Hotjar Site ID and snippet version from the panel.
- **Tracking code** added to the `<head>` of every panel page, but only once a Site ID is saved.
- `HotjarPlugin::make()->settingsPage(false)` injects the script without the settings page.
- **Translations** in 19 locales (en, pt_BR, ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN).

| Branch | Filament | Version |
|--------|----------|---------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |
