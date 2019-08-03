<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*  $cities = json_decode('[
            {
                "id": "1",
                "parentId": null,
                "name": "الجهراء"
            },
            {"id": "2", "parentId": "1", "name": "جهره"},
            {"id": "3", "parentId": "1", "name": "واحه (کوریات)"},
            {"id": "4", "parentId": "1", "name": "عیون"},
            {"id": "5", "parentId": "1", "name": "قصر"},
            {"id": "6", "parentId": "1", "name": "نسیم"},
            {"id": "7", "parentId": "1", "name": "تیماء"},
            {"id": "8", "parentId": "1", "name": "نعیم"},
           {
                "id": "9",
                "parentId": null,
                "name": "العاصمة"
            },
            {"id": "10", "parentId": "9", "name": "واحه2"},
            {"id": "11", "parentId": "9", "name": "عیون2"},
            {"id": "12", "parentId": "9", "name": "قصر2"},
            {"id": "13", "parentId": "9", "name": "2نسیم"},
            {"id": "14", "parentId": "9", "name": "2تیماء"},
            {"id": "15", "parentId": "9", "name": "نعیم2"},
            {
            "id": "16", "parentId": null, "name": "الفروانية"
            },
            {
            "id": "17", "parentId": null, "name": "حولي"
            },
            {
            "id": "18", "parentId": null, "name": "مبارك الكبير"
            },
            {
            "id": "19", "parentId": null, "name": "الأحمدي"
            },


            ]');

        foreach ($cities as $city)
        {
            DB::table('city')->insert([
                'id'       => $city->id,
                'parentId' => $city->parentId,
                'name'     => $city->name,
                'status'     => 'ACTIVE',
            ]);
        }*/

    }
}
