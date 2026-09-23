<?php

namespace JeffersonGoncalves\Filament\Hotjar;

use JeffersonGoncalves\Filament\Hotjar\Pages\ManageHotjarSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class HotjarPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-hotjar';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageHotjarSettings::class;
    }
}
