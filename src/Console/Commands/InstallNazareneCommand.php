<?php

namespace Nazarene\Backend\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallNazareneCommand extends Command
{
    protected $signature = 'nazarene:install {--seed : Run the seeders after migration}';
    protected $description = 'Install Nazarene package migrations and optionally seed the database';

    public function handle()
    {
        $this->info('Installing Nazarene package...');

        // Run migrations
        $this->info('Running migrations...');
        Artisan::call('migrate', [
            '--path' => 'vendor/nazarene/backend/src/Database/Migrations',
        ]);

        if ($this->option('seed')) {
            // Run seeders
            $this->info('Running seeders...');
            Artisan::call('db:seed', [
                '--class' => 'Nazarene\\Backend\\Database\\Seeders\\DatabaseSeeder',
            ]);
        }

        $this->info('Nazarene package installed successfully!');
    }
} 