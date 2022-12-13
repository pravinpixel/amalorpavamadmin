<?php

namespace Database\Seeders;

use App\Models\staffMasterMaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class maritalstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marritalStatus=[
            [
                'name'=>'married'
            ],
            [
                'name'=>'single'
            ],
            [
                'name'=>'divorced'
            ]
        ];
        staffMasterMaritalStatus::insert($marritalStatus);
    }
}
