<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RapportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rapports')->insert([
             'filePath' => Str::random(10),
             'date_depot' => Carbon::create('2000', '01', '01'),
             'user_id' => 2,
         ]);
    }
}
