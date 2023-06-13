<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->insert([
           'type' => 'ete',
            'sujet' => Str::random(10),
            'date_debut' => Carbon::create('2000', '01', '01'),
            'date_fin' => Carbon::create('2000', '01', '01'),
            'societe_id' => 1,
        ]);
    }
}
