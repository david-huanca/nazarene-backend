<?php
namespace Nazarene\Backend\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallNazareneCommand extends Command
{
    protected $signature = 'nazarene:install';
    protected $description = 'Instala el paquete Nazarene Backend.';

    public function handle()
    {
        $this->info('📦 Instalando Nazarene Backend...');

        // Publicar archivos de configuración, modelos, migraciones y seeders
        Artisan::call('vendor:publish', ['--tag' => 'nazarene-config']);
        Artisan::call('vendor:publish', ['--tag' => 'nazarene-models']);
        Artisan::call('vendor:publish', ['--tag' => 'nazarene-migrations']);
        Artisan::call('vendor:publish', ['--tag' => 'nazarene-seeders']);

        // Ejecutar migraciones
        Artisan::call('migrate');

        // Ejecutar seeders
        Artisan::call('db:seed', ['--class' => 'Nazarene\Backend\Database\Seeders\MinistrySeeder']);

        $this->info('✅ Nazarene Backend instalado correctamente.');
    }
}
