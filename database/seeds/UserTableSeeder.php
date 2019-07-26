<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('user')->insert([
            'name'         => 'مهدی',
            'family'       => 'منصوری',
            'hash'         => Str::random(6),
            'cityId'       => 14,
            'username'     => '09188888888',
            'password'     => Hash::make('123456789'),
            'mobile'       => '09188888888',
            'tellPhone'    => '33133527',
            'nationalCode' => '0550086129',
            'birthDate'    => null,
            'email'        => 'mahdi@ymail.com',
            'avatar'       => 'mahdi.png',
            'description'  => 'man mahdi hastam',
            'status'       => 'ACTIVE',
            'creatorId'    => 1,
            'created_at'   => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);


        DB::table('user')->insert([
            'name'         => 'مژگان',
            'family'       => 'احمدی',
            'hash'         => Str::random(6),
            'username'     => '09183683503',
            'password'     => Hash::make('123456789'),
            'mobile'       => '09183683503',
            'cityId'       => 14,
            'tellPhone'    => '33133527',
            'nationalCode' => '0550086129',
            'birthDate'    => null,
            'email'        => 'mojgan@ymail.com',
            'avatar'       => 'mozhgan.png',
            'description'  => 'man mozhgan hastam',
            'status'       => 'ACTIVE',
            'creatorId'    => 1,
            'created_at'   => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('user')->insert([
            'name'         => 'نسیم',
            'family'       => 'بوالحسنی',
            'hash'         => Str::random(6),
            'username'     => '09361201731',
            'password'     => Hash::make('123456789'),
            'mobile'       => '09361201731',
            'cityId'       => 16,
            'tellPhone'    => '33133528',
            'nationalCode' => '0520840568',
            'birthDate'    => null,
            'email'        => 'nasim@ymail.com',
            'avatar'       => 'nasim.png',
            'description'  => 'man nasim hastam',
            'status'       => 'ACTIVE',
            'creatorId'    => $faker->numberBetween(1, 2),
            'created_at'   => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

        DB::table('user')->insert([
            'name'         => 'ستار',
            'family'       => 'بوالحسنی',
            'hash'         => Str::random(6),
            'username'     => '09361201730',
            'password'     => Hash::make('123456789'),
            'mobile'       => '09361201730',
            'cityId'       => 14,
            'tellPhone'    => '33133527',
            'nationalCode' => '0520840569',
            'birthDate'    => null,
            'email'        => 'satar@ymail.com',
            'avatar'       => 'satar.png',
            'description'  => 'man satar hastam',
            'status'       => 'ACTIVE',
            'creatorId'    => $faker->numberBetween(1, 2),
            'created_at'   => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);


        DB::table('user')->insert([
            'name'         => 'مبینا',
            'family'       => 'احمدی',
            'hash'         => Str::random(6),
            'username'     => '09039182326',
            'password'     => Hash::make('123456789'),
            'mobile'       => '09039182326',
            'cityId'       => 14,
            'tellPhone'    => '33133527',
            'nationalCode' => '0520929586',
            'birthDate'    => null,
            'email'        => 'mobina@ymail.com',
            'avatar'       => 'mobina.png',
            'description'  => 'man mobina hastam',
            'status'       => 'ACTIVE',
            'creatorId'    => $faker->numberBetween(1, 2),
            'created_at'   => \Carbon\Carbon::now()->addDays($faker->numberBetween(1, 7))
                ->addMonths($faker->numberBetween(1, 5))->addHour($faker->numberBetween(1, 10)),
        ]);

    }
}
