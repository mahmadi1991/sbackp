<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DetailsModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('details_model')->insert([
            'id'         => 1,
            'hash'       => Str::random(6),
            'parentId'   => 0,
            'title'      => 'یقه',
            'cost'       => 90000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
        DB::table('details_model')->insert([
            'id'         => 2,
            'hash'       => Str::random(6),
            'parentId'   => 0,
            'title'      => 'دکمه',
            'cost'       => 45000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('details_model')->insert([
            'id'         => 3,
            'hash'       => Str::random(6),
            'parentId'   => 0,
            'title'      => 'جیب',
            'cost'       => 90000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
        DB::table('details_model')->insert([
            'id'         => 4,
            'hash'       => Str::random(6),
            'parentId'   => 1,
            'title'      => 'دیپلمات',
            'cost'       => 90000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
        DB::table('details_model')->insert([
            'id'         => 5,
            'hash'       => Str::random(6),
            'parentId'   => 1,
            'title'      => 'انگلیسی',
            'cost'       => 90000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
        DB::table('details_model')->insert([
            'id'         => 6,
            'hash'       => Str::random(6),
            'parentId'   => 2,
            'title'      => 'چهار گوش',
            'cost'       => 69000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('details_model')->insert([
            'id'         => 7,
            'hash'       => Str::random(6),
            'parentId'   => 3,
            'title'      => 'مربعی',
            'cost'       => 45000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
        DB::table('details_model')->insert([
            'id'         => 8,
            'hash'       => Str::random(6),
            'parentId'   => 3,
            'title'      => 'دایره ای',
            'cost'       => 40000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
        DB::table('details_model')->insert([
            'id'         => 9,
            'hash'       => Str::random(6),
            'parentId'   => 3,
            'title'      => 'ستاره ای',
            'cost'       => 39000,
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
    }
}
