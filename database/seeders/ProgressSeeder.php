<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Progress;

class ProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Progress::create([
            'user_id' => 1,
            'materi_id' => 1,
            'exp' => 20
        ]);
        Progress::create([
            'user_id' => 2,
            'materi_id' => 1,
            'exp' => 20
        ]);
        Progress::create([
            'user_id' => 1,
            'materi_id' => 1,
            'exp' => 30
        ]);
        Progress::create([
            'user_id' => 3,
            'materi_id' => 1,
            'exp' => 20
        ]);
        Progress::create([
            'user_id' => 3,
            'materi_id' => 1,
            'exp' => 40
        ]);
        Progress::create([
            'user_id' => 4,
            'materi_id' => 1,
            'exp' => 20
        ]);
        Progress::create([
            'user_id' => 4,
            'materi_id' => 1,
            'exp' => 10
        ]);
    }
}