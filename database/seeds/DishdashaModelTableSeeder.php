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
            'cost'       => 90000,
            'picture'       => 'model1.jpg',
            'order'      => 1,
            'status'           => 'INACTIVE',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('dishdasha_model')->insert([
            'id'         => 2,
            'hash'       => Str::random(6),
            'title'      => 'آستین چین دار',
            'cost'       => 90000,
            'picture'       => 'model2.jpg',
            'order'      => 2,
            'status'           => 'INACTIVE',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('dishdasha_model')->insert([
            'id'         => 3,
            'hash'       => Str::random(6),
            'title'      => 'جامعی',
            'cost'       => 90000,
            'picture'       => 'model3.jpg',
            'order'      => 3,
            'status'           => 'INACTIVE',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('dishdasha_model')->insert([
            'id'         => 4,
            'hash'       => Str::random(6),
            'title'      => 'مجلسی',
            'cost'       => 90000,
            'picture'       => 'model4.jpg',
            'order'      => 4,
            'status'           => 'INACTIVE',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('dishdasha_model')->insert([
            'id'         => 5,
            'hash'       => Str::random(6),
            'title'      => 'اعیانی',
            'cost'       => 90000,
            'picture'       => 'model5.jpg',
            'order'      => 5,
            'status'           => 'INACTIVE',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
    }
}
