<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('size')->insert([
            'id'            => 1,
            'hash'          => Str::random(6),
            'userId'        => 3,
            'length'        => 185,
            'shoulderWidth' => 40,
            'chest'         => 50,
            'armLength'     => 35,
            'waist'         => 30,
            'creatorId'     => $faker->numberBetween(1, 2),
            'created_at'    => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('size')->insert([
            'id'            => 2,
            'hash'          => Str::random(6),
            'userId'        => 4,
            'length'        => 170,
            'shoulderWidth' => 30,
            'chest'         => 40,
            'armLength'     => 25,
            'waist'         => 20,
            'creatorId'     => $faker->numberBetween(1, 2),
            'created_at'    => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('size')->insert([
            'id'            => 3,
            'hash'          => Str::random(6),
            'userId'        => 3,
            'length'        => 160,
            'shoulderWidth' => 20,
            'chest'         => 30,
            'armLength'     => 25,
            'waist'         => 20,
            'creatorId'     => $faker->numberBetween(1, 2),
            'created_at'    => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('size')->insert([
            'id'            => 4,
            'hash'          => Str::random(6),
            'userId'        => 4,
            'length'        => 175,
            'shoulderWidth' => 35,
            'chest'         => 30,
            'armLength'     => 20,
            'waist'         => 25,
            'creatorId'     => $faker->numberBetween(1, 2),
            'created_at'    => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
    }
}
