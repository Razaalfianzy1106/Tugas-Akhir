<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Raza Alfianzi',
            'nis' => '202004099',
            'email' => 'raza@gmail.com',
            'password' => Hash::make('123'),
            'role'=> 'siswa'
       ]);
    }
}
