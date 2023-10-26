<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder as SeedersUserSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SeedersUserSeeder::class,
            CategorySeeder::class,
            MateriSeeder::class,
            JenisPertanyaanSeeder::class,
            JawabanSeeder::class,
            LatihanSeeder::class,
            ProgressSeeder::class,
        ]);
    }
}
