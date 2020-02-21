<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Billys Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
