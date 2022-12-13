<?php

namespace Database\Seeders;

use App\Models\staffMasterDesignation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class designationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $des=[
            [
                'name'=>'Correspondent'
            ],
            [
                'name'=>'Senior Principal '
            ],
            [
                'name'=>'Principal'
            ],
            [
                'name'=>' Vice Principal'
            ],
            [
                'name'=>'Asst. Corresspondent'
            ],
            [
                'name'=>'Manager'
            ],
            [
                'name'=>'Director'
            ],
            [
                'name'=>'Lecturer'
            ],
            [
                'name'=>'TGT'
            ],
            [
                'name'=>'PST'
            ],
            [
                'name'=>'Teacher'
            ],
            [
                'name'=>'other'
            ]
        ];
        staffMasterDesignation::insert($des);
    }
}
