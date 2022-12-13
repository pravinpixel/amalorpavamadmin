<?php

namespace Database\Seeders;

use App\Models\staffMasterCaste;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class casteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $caste=[
        [
            'name'=>'OBC'
        ],
        [
            'name'=>'BC'
        ],
        [
            'name'=>'BCM'
        ],
        [
            'name'=>'EBC'
        ],
        [
            'name'=>'SC'
        ],
        [
            'name'=>'ST'
        ],
        [
            'name'=>'MBC'
        ]
       ];
       staffMasterCaste::insert($caste);
    }
}
