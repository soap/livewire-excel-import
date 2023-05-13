<?php

namespace Soap\LivewireExcelImport;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soap\LivewireExcelImport\Commands\LivewireExcelImportCommand;

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
            ->hasMigration('create_livewire-excel-import_table')
            ->hasCommand(LivewireExcelImportCommand::class);
    }
}
