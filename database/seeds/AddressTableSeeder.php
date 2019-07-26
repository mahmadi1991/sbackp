<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('address')->insert([
            'id'         => 1,
            'hash'       => Str::random(6),
            'userId'     => 4,
            'areaId'     => 3,
            'postalCode' => 54686961,
            'address'    => 'اراک خیابان خرم کوچه کندی اواسط کوچه',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('address')->insert([
            'id'         => 2,
            'hash'       => Str::random(6),
            'userId'     => 3,
            'areaId'     => 2,
            'postalCode' => 58746921,
            'address'    => 'اراک خیابان ملک خیابان 12 متری کوچه عباسی',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('address')->insert([
            'id'         => 3,
            'hash'       => Str::random(6),
            'userId'     => 4,
            'areaId'     => 3,
            'postalCode' => 58746921,
            'address'    => 'اراک خیابان هپکو خیابان نواب خیابان مدرس کوچه یاس 11',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('address')->insert([
            'id'         => 4,
            'hash'       => Str::random(6),
            'userId'     => 4,
            'areaId'     => 1,
            'postalCode' => 58746921,
            'address'    => 'اراک خیابان هپکو خیابان شهید بهشتی فاز 2 شهریور 6',
            'creatorId'  => $faker->numberBetween(1, 2),
            'created_at' => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);
    }
}
