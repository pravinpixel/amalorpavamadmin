<?php

namespace Database\Seeders;

use App\Models\staffMasterReligion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class religionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religion=[
            [
                'name'=>'Hindu'
            ],
            [
                'name'=>'Muslim'
            ],
            [
                'name'=>'Christian'
            ],
            [
                'name'=>'Christian [RC]'
            ],
            [
                'name'=>'Other'
            ]
        ];
        staffMasterReligion::insert($religion);
    }
}
