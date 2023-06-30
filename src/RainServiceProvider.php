<?php

namespace LaraZeus\Rain;

use Filament\PluginServiceProvider;
use LaraZeus\Core\CoreServiceProvider;
use LaraZeus\Rain\Console\PublishCommand;
use LaraZeus\Rain\Filament\Resources\LayoutResource;
use LaraZeus\Rain\Http\Livewire\Layouts;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class RainServiceProvider extends PluginServiceProvider
{
    public static string $name = 'zeus-rain';

    protected array $resources = [
        LayoutResource::class,
    ];

    public function bootingPackage(): void
    {
        Livewire::component('landing', Layouts::class);

        CoreServiceProvider::setThemePath('rain');

    }

    protected function getCommands(): array
    {
        return [
            PublishCommand::class,
        ];
    }

    public function packageConfiguring(Package $package): void
    {
        $package
            ->hasMigrations(['create_widgets_table'])
            ->hasRoute('web');
    }
}
