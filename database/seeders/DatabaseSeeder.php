<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            portfolio_seed::class,
        ]);

        $this->call([
            jobdesk_seed::class,
        ]);

        $this->call([
            team_seed::class,
        ]);

        $this->call([
            user_seed::class,
        ]);

        $this->call([
            layanan_seed::class,
        ]);
        $this->call([
            project_seed::class,
        ]);
    }
}