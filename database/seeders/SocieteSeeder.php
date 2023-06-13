<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SocieteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('societes')->insert([
            'nom' => Str::random(10),
            'telephone' => Str::random(10),
            'adresse' => Str::random(10).'@gmail.com',
    
        
        ]);
    }
}
