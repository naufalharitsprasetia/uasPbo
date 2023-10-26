<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'name' => 'Nun Sukun dan Tanwin',
                'slug' => 'nun-sukun-dan-tanwin'
            ],
            [
                'name' => 'Mim Sukun',
                'slug' => 'mim-sukun'
            ],
            [
                'name' => 'Mim Tasydid dan Nun Tasydid',
                'slug' => 'mim-tasydid-dan-nun-tasydid'
            ],
            [
                'name' => "Laam Ta'rief",
                'slug' => 'laam-ta-rief'
            ],
            [
                'name' => 'Laam Tebal dan Tipis',
                'slug' => 'laam-tebal-dan-tipis'
            ],
            [
                'name' => 'Idgham Mutamasilain',
                'slug' => 'idgham-mutamasilain'
            ],
            [
                'name' => 'Idgham Mutaqaribain',
                'slug' => 'idgham-mutaqaribain'
            ],
            [
                'name' => 'Idgham Mutajanisain',
                'slug' => 'idgham-mutajanisain'
            ],
            [
                'name' => 'Mad',
                'slug' => 'mad'
            ],
        ];

        // Insert data ke dalam tabel 'users'
        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
