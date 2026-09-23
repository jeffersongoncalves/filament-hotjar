<?php

namespace JeffersonGoncalves\Filament\Hotjar\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Hotjar\Settings\HotjarSettings;

class ManageHotjarSettings extends SettingsPage
{
    protected static string $settings = HotjarSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire';

    public static function getNavigationLabel(): string
    {
        return __('filament-hotjar::pages.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-hotjar::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-hotjar::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-hotjar::pages.sections.hotjar.heading'))
                    ->description(__('filament-hotjar::pages.sections.hotjar.description'))
                    ->schema([
                        TextInput::make('site_id')
                            ->label(__('filament-hotjar::pages.fields.site_id.label'))
                            ->helperText(__('filament-hotjar::pages.fields.site_id.helper'))
                            ->placeholder('1234567')
                            ->regex('/^\d+$/')
                            ->nullable(),

                        TextInput::make('version')
                            ->label(__('filament-hotjar::pages.fields.version.label'))
                            ->helperText(__('filament-hotjar::pages.fields.version.helper'))
                            ->integer()
                            ->minValue(1)
                            ->default(6)
                            ->required(),
                    ])->columns(2),
            ]);
    }
}
