<?php

namespace Database\Seeders;

use App\Models\Latihan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Izhar Halqi
        Latihan::create([
            'materi_id' => 1,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Apa Artinya Idzhar ??'
        ]);
        Latihan::create([
            'materi_id' => 1,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Ada Berapa Huruf Halqi ??'
        ]);
        Latihan::create([
            'materi_id' => 1,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Kenapa Disebut Halqi ??'
        ]);
        Latihan::create([
            'materi_id' => 1,
            'jenis_pertanyaan_id' => 2,
            'pertanyaan' => 'Sebukan Kalimat Berikut ....'
        ]);
        Latihan::create([
            'materi_id' => 1,
            'jenis_pertanyaan_id' => 3,
            'pertanyaan' => 'Dengarkan Kalimat Berikut ...'
        ]);
        // Idgham BiGunnah
        Latihan::create([
            'materi_id' => 2,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => '"Idgham" Artinya ?'
        ]);
        Latihan::create([
            'materi_id' => 2,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => '"Bi-Ghunnah" Artinya?'
        ]);
        Latihan::create([
            'materi_id' => 2,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'ada berapakah huruf di dalam Idgham Bi-Ghunnah ?'
        ]);
        Latihan::create([
            'materi_id' => 2,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Sebutkan manakah pilihan dibawah ini yang merupakan Idgham Bi-Ghunnah !'
        ]);
        Latihan::create([
            'materi_id' => 2,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Sebutkan manakah pilihan dibawah ini yang merupakan huruf Idgham Bi-Ghunnah !'
        ]);
        // Idgham BilaGunnah
        Latihan::create([
            'materi_id' => 3,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Bila-Ghunnah artinya ?'
        ]);
        Latihan::create([
            'materi_id' => 3,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Sebutkan huruf hijaiyah yang ada di Bila-Ghunnah'
        ]);
        Latihan::create([
            'materi_id' => 3,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Sebutkan contoh dari Bila-ghunnah'
        ]);
        Latihan::create([
            'materi_id' => 3,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'ada berapakah huruf di dalam Idgham Bila-Ghunnah '
        ]);
        // Iqlab
        Latihan::create([
            'materi_id' => 4,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Iqlab artinya ?'
        ]);
        Latihan::create([
            'materi_id' => 4,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'ada berapakah huruf di dalam Iqlab ?'
        ]);
        Latihan::create([
            'materi_id' => 4,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Sebutkan contoh dari iqlab !'
        ]);
        Latihan::create([
            'materi_id' => 4,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Sebutkan huruf hijaiyah yang ada Iqlab !'
        ]);
        // Ikhfa Haqiqi
        Latihan::create([
            'materi_id' => 5,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Ikhfa artinya ?'
        ]);
        Latihan::create([
            'materi_id' => 5,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'haqiqi artinya'
        ]);
        Latihan::create([
            'materi_id' => 5,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'ada berapakah huruf di dalam ihfa haqiqi:'
        ]);
        Latihan::create([
            'materi_id' => 5,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Sebutkan contoh dari ihfa haqiqi:'
        ]);
        //  Ikhfa Syafawi
        Latihan::create([
            'materi_id' => 6,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Syafawi artinya:'
        ]);
        Latihan::create([
            'materi_id' => 6,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'ada berapakah huruf di dalam ihfa syafawi:'
        ]);
        Latihan::create([
            'materi_id' => 6,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'bagaimana cara membacanya:'
        ]);
        Latihan::create([
            'materi_id' => 6,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Sebutkan contoh dari ihfa syafawi:'
        ]);
        // Idgham Mimi
        Latihan::create([
            'materi_id' => 7,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Sebutkan contoh dari idgham mimi:'
        ]);
        Latihan::create([
            'materi_id' => 7,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'bagaimana cara membacanya idgham mimi'
        ]);
        Latihan::create([
            'materi_id' => 7,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Idgham artinya:'
        ]);
    }
}