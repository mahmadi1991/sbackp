<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('language')->insert([
            'title'            => 'persian',
            'name'            => 'فارسی',
            'creatorId'        => $faker->numberBetween(1, 2),
            'created_at'       => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);


        DB::table('language')->insert([
            'title'            => 'arabic',
            'name'            => 'عربی',
            'creatorId'        => $faker->numberBetween(1, 2),
            'created_at'       => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('language')->insert([
            'title'            => 'english',
            'name'            => 'انگلیسی',
            'creatorId'        => $faker->numberBetween(1, 2),
            'created_at'       => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);


    }
}
