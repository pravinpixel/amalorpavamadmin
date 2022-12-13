<?php

namespace Database\Seeders;

use App\Models\staffMasterSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class subjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject=[
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
            ]
            ,
            [
                'name'=>'Bio-Zoology'
            ]
            ,
            [
                'name'=>'Computer Science'
            ]
            ,
            [
                'name'=>'Computer Applications'
            ]
            ,
            [
                'name'=>'Business Maths'
            ]
            ,
            [
                'name'=>'Commerce'
            ]
            ,
            [
                'name'=>'Economics'
            ]
            ,
            [
                'name'=>'Accountancy'
            ]
        ];
        staffMasterSubject::insert($subject);
    }
}
