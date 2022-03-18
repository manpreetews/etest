<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // 'id'     => null,
            'name'     => 'eQuasar Solutions',
            'email'    => 'equasarsolutions@gmail.com',
            'password' => Hash::make('password'),
            'mobile'=>'8284840500',
            'role'=>'0',
            'otp'=>'0',
            'isVerified'=>0
        ]);
    }
}
