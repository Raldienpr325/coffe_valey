<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            // Seed the 'bean' table
            $beanId = DB::table('bean')->insertGetId([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 1, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('daily_bean')->insert([
                'bean_id' => $beanId,
                'sale_price' => $faker->randomFloat(2, 1, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
