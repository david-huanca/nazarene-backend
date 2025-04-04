<?php
namespace Nazarene\Backend\Providers;

use Illuminate\Support\ServiceProvider;
use Nazarene\Backend\Console\InstallNazareneCommand;

class NazareneBackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registrar el comando de instalación
        $this->commands([
            InstallNazareneCommand::class,
        ]);
    }

    public function boot()
    {
        // Publicar configuración
        $this->publishes([
            __DIR__ . '/../Config/nazarene.php' => config_path('nazarene.php'),
        ], 'nazarene-config');

        // Publicar modelos
        $this->publishes([
            __DIR__ . '/../Models' => app_path('Models/Nazarene'),
        ], 'nazarene-models');

        // Publicar migraciones
        $this->publishes([
            __DIR__ . '/../Database/Migrations' => database_path('migrations'),
        ], 'nazarene-migrations');

        // Publicar seeders
        $this->publishes([
            __DIR__ . '/../Database/Seeders' => database_path('seeders'),
        ], 'nazarene-seeders');

        // Cargar migraciones automáticamente
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
