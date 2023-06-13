<?php

namespace Database\Seeders;

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
        //php artisan db:seed --class=UserSeeder : passer vers la base de données
        DB::table('users')->insert([
            'nom' => Str::random(10),
            'prenom' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'cin' => Str::random(10),
            'image' => Str::random(100),
            'niveau' => Str::random(10),
            'specialite' => Str::random(10),
            'numero_inscription' => Str::random(10),
        ]);
    }
}
