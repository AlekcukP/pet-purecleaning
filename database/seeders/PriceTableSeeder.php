<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            'id' => 1,
            'price_per_footage'=> 0.1,
            'deep_type_coef'=> 1,
            'movein_type_coef'=> 1.2,
            'moveout_type_coef'=> 1.2,
            'remodeling_type_coef'=> 1.5,
            'extra_fridge'=> 20,
            'extra_oven'=> 20,
            'extra_garage'=> 20,
            'extra_laundary'=> 20,
            'extra_blinds'=> 20,
            'weekly_coef'=>0.8,
            'biweekly_coef'=>0.95
        ]);
    }
}
