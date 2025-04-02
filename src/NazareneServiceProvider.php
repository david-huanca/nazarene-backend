<?php

namespace Nazarene\Backend;

use Illuminate\Support\ServiceProvider;
use Nazarene\Backend\Console\Commands\InstallNazareneCommand;
use Nazarene\Backend\Models\Area;
use Nazarene\Backend\Models\Church;
use Nazarene\Backend\Models\Country;
use Nazarene\Backend\Models\District;
use Nazarene\Backend\Models\Member;
use Nazarene\Backend\Models\Ministry;
use Nazarene\Backend\Models\Region;

class NazareneServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish migrations
        $this->publishes([
            __DIR__.'/Database/Migrations' => database_path('migrations'),
        ], 'nazarene-migrations');

        // Publish seeders
        $this->publishes([
            __DIR__.'/Database/Seeders' => database_path('seeders'),
        ], 'nazarene-seeders');

        // Publish factories
        $this->publishes([
            __DIR__.'/Database/Factories' => database_path('factories'),
        ], 'nazarene-factories');

        // Publish config
        $this->publishes([
            __DIR__.'/../config/nazarene.php' => config_path('nazarene.php'),
        ], 'nazarene-config');

        // Register models
        $this->app->bind('nazarene.area', Area::class);
        $this->app->bind('nazarene.church', Church::class);
        $this->app->bind('nazarene.country', Country::class);
        $this->app->bind('nazarene.district', District::class);
        $this->app->bind('nazarene.member', Member::class);
        $this->app->bind('nazarene.ministry', Ministry::class);
        $this->app->bind('nazarene.region', Region::class);

        // Register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallNazareneCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/nazarene.php', 'nazarene'
        );
    }
} 