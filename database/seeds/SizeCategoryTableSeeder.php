<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SizeCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('size_category')->insert([
            'title'            => 'بزرگسال',
            'length' => '4',
            'creatorId'        => $faker->numberBetween(1, 2),
            'created_at'       => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('size_category')->insert([
            'title'            => 'بچه گانه',
            'length' => '2',
            'creatorId'        => $faker->numberBetween(1, 2),
            'created_at'       => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

    }
}
