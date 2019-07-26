<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DishdashaModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('dishdasha_model')->insert([
            'id'         => 1,
            'hash'       => Str::random(6),
            'title'      => 'عادی',
            'order'      => 1,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('dishdasha_model')->insert([
            'id'         => 2,
            'hash'       => Str::random(6),
            'title'      => 'آستین چین دار',
            'order'      => 2,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('dishdasha_model')->insert([
            'id'         => 3,
            'hash'       => Str::random(6),
            'title'      => 'جامعی',
            'order'      => 3,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('dishdasha_model')->insert([
            'id'         => 4,
            'hash'       => Str::random(6),
            'title'      => 'مجلسی',
            'order'      => 4,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('dishdasha_model')->insert([
            'id'         => 5,
            'hash'       => Str::random(6),
            'title'      => 'اعیانی',
            'order'      => 5,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
    }
}
