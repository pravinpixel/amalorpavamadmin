<?php

namespace Database\Seeders;

use App\Models\staffMasterPlaceOfWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class placeOfWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $placeOfWork=[
            [
                'name'=>'Lourdes Campus'
            ],
            [
                'name'=>'Arumari Primary Building'
            ],
            [
                'name'=>'Infant Jesus Block'
            ],
            [
                'name'=>'All Saints Campus'
            ],
            [
                'name'=>'Hostel - Boys'
            ],
            [
                'name'=>' Hostel - Girls'
            ]
        ];
        staffMasterPlaceOfWork::insert($placeOfWork);
    }
}
