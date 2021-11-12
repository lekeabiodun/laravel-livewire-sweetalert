<?php

namespace Lekeabiodun\SweetAlert\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lekeabiodun\SweetAlert\SweetAlertServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lekeabiodun\\SweetAlert\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SweetAlertServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-livewire-sweetalert_table.php.stub';
        $migration->up();
        */
    }
}
