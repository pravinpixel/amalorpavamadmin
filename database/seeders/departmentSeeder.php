<?php

namespace Database\Seeders;

use App\Models\staffMasterDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class departmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $department=[
        [
            'name'=>'Management'
        ],
        [
            'name'=>'Lourdes Campus Office'
        ],
        [
            'name'=>' Arumai Primary Office'
        ],
        [
            'name'=>'Infant Jesus Office'
        ],
        [
            'name'=>'ASC Office'
        ],
        [
            'name'=>'Annex Ofice'
        ],
        [
            'name'=>'Hostel Office'
        ],
        [
            'name'=>'English'
        ],
        [
            'name'=>'Tamil'
        ],
        [
            'name'=>'French'
        ],
        [
            'name'=>'Hindi'
        ],
        [
            'name'=>'Maths'
        ],
        [
            'name'=>'Science'
        ],
        [
            'name'=>'Social Science'
        ],
        [
            'name'=>'Physics'
        ],
        [
            'name'=>'Chemistry'
        ],
        [
            'name'=>'Bio-Botany'
        ],
        [
            'name'=>'Bio-Zoology'
        ],
        [
            'name'=>'Computer'
        ],
        [
            'name'=>'Business Maths'
        ],
        [
            'name'=>'Commerce'
        ],
        [
            'name'=>'Economics'
        ],
        [
            'name'=>'Accountancy'
        ]
       ];
       staffMasterDepartment::insert($department);
    }
}
