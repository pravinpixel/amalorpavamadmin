<?php

namespace Database\Seeders;

use App\Models\staffMasterNatureOfEmployment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class natureOfEmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employment=[
            [
                'name'=>'Formal Education'
            ],
            [
                'name'=>'Informal Education'
            ],
            [
                'name'=>'Nonformal Education'
            ]
        ];
        staffMasterNatureOfEmployment::insert($employment);
    }
}
