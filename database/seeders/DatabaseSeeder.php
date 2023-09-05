<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Materi;
use App\Models\Latihan;
use App\Models\Jawaban;
use App\Models\JenisPertanyaan;
use App\Models\Progress;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Naufal Harits',
            'username' => 'naufalharis',
            'password' => bcrypt('bismillah'),
            'email' => 'naufal@gmail.com',
            'is_admin' => true,
        ]);
        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::create([
            'name' => 'Hal Nun Sukun dan Tanwin',
            'slug' => 'hal-nun-sukun-dan-tanwin'
        ]);
        Category::create([
            'name' => 'Hal Mim Sukun',
            'slug' => 'hal-mim-sukun'
        ]);
        Category::create([
            'name' => 'Hal Mim Tasydid dan Nun Tasydid',
            'slug' => 'hal-mim-tasydid-dan-nun-tasydid'
        ]);
        Category::create([
            'name' => "Hal Laam Ta'rief",
            'slug' => 'hal-laam-ta-rief'
        ]);
        Category::create([
            'name' => 'Hal Laam Tebal dan Tipis',
            'slug' => 'hal-laam-tebal-dan-tipis'
        ]);

        Materi::create([
            'category_id' => 1,
            'judul' => 'Izhar Halqi',
            'slug' => 'izhar-halqi',
            'desc' => 'Manakala Ada Nun Sukun Bertemu dengan tanwin',
            'body' => 'Manakala Ada Nun Sukun Bertemu dengan tanwin, dan lain-lain',
            'text_suara' => 'Iqlab',
            'contoh_suara' => 'sound/contoh.mp3'
        ]);
        Latihan::create([
            'materi_id' => 1,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => '1. Jika Nun sukun bertemu dengan mim disebut ??'
        ]);
        JenisPertanyaan::create([
            'jenis_pertanyaan' => 'Multiple Choice'
        ]);
        JenisPertanyaan::create([
            'jenis_pertanyaan' => 'Speech'
        ]);
        JenisPertanyaan::create([
            'jenis_pertanyaan' => 'Listening'
        ]);
        Progress::create([
            'user_id' => 1,
            'exp' => 20
        ]);
        Jawaban::create([
            'latihan_id' => 1,
            'jawaban' => "Idzhar",
        ]);
        Jawaban::create([
            'latihan_id' => 1,
            'jawaban' => "Iqlab",
        ]);
        Jawaban::create([
            'latihan_id' => 1,
            'jawaban' => "Ikhfa",
        ]);
        Jawaban::create([
            'latihan_id' => 1,
            'jawaban' => "Idghom",
        ]);
    }
}
