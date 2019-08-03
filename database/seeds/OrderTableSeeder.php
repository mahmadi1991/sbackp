<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('order')->insert([
            'hash'                 => Str::random(6),
            'factorId'             => 1,
            'userId'               => 4,
            'tailorId'             => 5,
            'sizeCategoryId'       => 1,
            'cityId'               => 14,
            'fabricId'             => 4,
            'addressId'            => 1,
            'sizeId'               => 4,
            'areaId'               => 1,
            'dishdashaModelId'     => 4,
            'length'               => 250,
            'cost'                 => 150000,
            'totalCost'            => 450000,
            'fabricDiscountAmount' => 10,
            'detailsCost'          => 39000,
            'transmissionCost'     => 2500,
            'fabricCost'           => 99000,
            'description'          => 'توضیحات',
            'fabricStatus'         => 'REGISTERED',
            'sewingStatus'         => 'REGISTERED',
            'fabric'               => 'Y',
            'dishdasha'            => 'Y',
            'receive'              => 'INPERSON',
            'orderType'            => 'INPERSON',
            'creatorId'            => $faker->numberBetween(1, 2),
            'created_at'           => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);


        DB::table('order')->insert([
            'hash'                 => Str::random(6),
            'factorId'             => 2,
            'userId'               => 3,
            'tailorId'             => 5,
            'sizeCategoryId'       => 1,
            'cityId'               => 11,
            'fabricId'             => 7,
            'addressId'            => 1,
            'sizeId'               => 4,
            'areaId'               => 3,
            'dishdashaModelId'     => 5,
            'length'               => 250,
            'cost'                 => 180000,
            'totalCost'            => 9000,
            'fabricDiscountAmount' => 0,
            'detailsCost'          => 39000,
            'transmissionCost'     => 3500,
            'fabricCost'           => 100000,
            'description'          => 'توضیحات',
            'fabricStatus'         => 'REGISTERED',
            'sewingStatus'         => 'REGISTERED',
            'fabric'               => 'Y',
            'dishdasha'            => 'Y',
            'receive'              => 'TRANSMISSION',
            'orderType'            => 'NOTINPERSON',
            'creatorId'            => $faker->numberBetween(1, 2),
            'created_at'           => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);


    }
}
