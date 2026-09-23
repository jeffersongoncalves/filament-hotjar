## Filament Hotjar

Filament plugin for Hotjar with a settings page powered by Spatie Laravel Settings. Manage the Hotjar site ID from the Filament admin panel; the tracking code is injected into `<head>` of every panel page.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-hotjar:"^2.0"
php artisan vendor:publish --tag=hotjar-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Hotjar\HotjarPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            HotjarPlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Disable the settings page" lang="php">
HotjarPlugin::make()->settingsPage(false)
</code-snippet>
@endverbatim

### Architecture
- `HotjarPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManageHotjarSettings`
- `HotjarServiceProvider` extends `AbstractAnalyticsServiceProvider` and injects the `hotjar::script` view (from `jeffersongoncalves/laravel-hotjar`) at `PanelsRenderHook::HEAD_START`
- `ManageHotjarSettings` extends `Filament\Pages\SettingsPage` bound to `JeffersonGoncalves\Hotjar\Settings\HotjarSettings` (`site_id`, `version`)
- Translations live under `filament-hotjar::pages.*`

### Best Practices
- Publish and run the settings migrations before opening the settings page
- The script only renders when `site_id` is set, so leaving it empty disables tracking
- Keep `version` at the Hotjar default (6) unless Hotjar instructs otherwise
