<?php

namespace Soap\LivewireExcelImport;

use Soap\LivewireExcelImport\Commands\LivewireExcelImportCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireExcelImportServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-excel-import')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_livewire-excel-imports_table')
            ->hasCommand(LivewireExcelImportCommand::class);
    }
}
