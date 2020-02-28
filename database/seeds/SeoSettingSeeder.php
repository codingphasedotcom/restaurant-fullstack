<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Billy's Burgers is an American multinational chain of hamburger fast food restaurants. Headquartered in the unincorporated area of Miami-Dade County, Florida, the company was founded in 1953 as Insta-Billy's Burgers, a Jacksonville, Florida–based restaurant chain.",
            'keywords' => "Burgers, Local Burger, Billy's Burgers, Salads, Best Burgers in Town",
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
