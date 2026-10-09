<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Hotjar\Settings\HotjarSettings;
use JeffersonGoncalves\Filament\Hotjar\HotjarPlugin;
use JeffersonGoncalves\Filament\Hotjar\Pages\ManageHotjarSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageHotjarSettings::class)
        ->and(HotjarPlugin::make()->getId())->toBe('filament-hotjar');
});

it('ships translated labels', function () {
    expect(ManageHotjarSettings::getNavigationLabel())->not->toContain('::')
        ->and((new ManageHotjarSettings)->getTitle())->not->toContain('::');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageHotjarSettings::class)
        ->fillForm(['site_id' => '1234567'])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(HotjarSettings::class)->refresh();
    expect($settings->site_id)->toBe('1234567');
});

it('injects the script into the panel once configured', function () {
    $settings = app(HotjarSettings::class);
    $settings->site_id = '1234567';
    $settings->save();

    $html = (string) FilamentView::renderHook(PanelsRenderHook::HEAD_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::HEAD_END)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_END);

    expect($html)->toContain('static.hotjar.com');
});
