<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'token' => Str::random(12),
                'name' => 'anandamw',
                'email' => 'anandamw@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
            ]]
            );
    }
}
