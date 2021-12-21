<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'guru',
                'email' => 'guru@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'guru',
                'class_id' => '1'
            ],
            [
                'name' => 'siswa',
                'email' => 'siswa@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'siswa',
                'class_id' => '2'
            ]
        ]);
    }
}
