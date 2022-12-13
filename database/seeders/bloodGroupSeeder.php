<?php

namespace Database\Seeders;

use App\Models\staffMasterBloodGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blood=[
            ['name'=>'A+'],['name'=>'A-'],['name'=>'B+'],['name'=>'B-'],['name'=>'O+'],['name'=>'O-'],
            ['name'=>'AB+'],['name'=>'AB-'],['name'=>'A1B+'],['name'=>'A1B-']
        ];
        staffMasterBloodGroup::insert($blood);
    }
}
