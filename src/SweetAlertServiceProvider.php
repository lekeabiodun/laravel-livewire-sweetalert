<?php

namespace Lekeabiodun\SweetAlert;

use Lekeabiodun\SweetAlert\Commands\SweetAlertCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SweetAlertServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-livewire-sweetalert')
            // ->hasConfigFile()
            ->hasViews()
            // ->hasMigration('create_laravel-livewire-sweetalert_table')
            // ->hasCommand(SweetAlertCommand::class);
            ;
    }
}
