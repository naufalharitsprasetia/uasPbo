<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Tambahkan 5 data pengguna secara manual
        $users = [
            [
                'name' => 'Naufal Harits',
                'username' => 'naufalharis',
                'password' => bcrypt('bismillah123'),
                'email' => 'naufal@gmail.com',
                'is_admin' => true,
                'gender' => 'male',
            ],
            [
                'name' => 'Mohamad Farhat',
                'username' => 'fardanio',
                'password' => bcrypt('bismillah123'),
                'email' => 'farhat@gmail.com',
                'is_admin' => true,
                'gender' => 'male',
            ],
            [
                'name' => 'maryam',
                'username' => 'maryam',
                'password' => bcrypt('bismillah'),
                'email' => 'maryam@gmail.com',
                'gender' => 'female',
            ],
            [
                'name' => 'zainab',
                'username' => 'zainab',
                'password' => bcrypt('bismillah'),
                'email' => 'zainav@gmail.com',
                'gender' => 'female',
            ],
            [
                'name' => 'admin',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'email' => 'admin@gmail.com',
                'gender' => 'male',
                'is_admin' => true,
            ],
        ];
        // Insert data ke dalam tabel 'users'
        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
