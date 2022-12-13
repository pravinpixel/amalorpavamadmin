<?php

namespace Database\Seeders;

use App\Models\staffMasterClassHandling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class classHandlingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classHandling=[
            [
                'name'=>'1 - 10'
            ],
            [
                'name'=>'11Bio'
            ],
            [
                'name'=>'11CS'
            ],
            [
                'name'=>'11CM'
            ],
            [
                'name'=>'11BM'
            ],
            [
                'name'=>'12Bio'
            ],
            [
                'name'=>'12CS'
            ]
            ,
            [
                'name'=>'12CM'
            ]
            ,
            [
                'name'=>'12BM'
            ]
        ];
        staffMasterClassHandling::insert($classHandling);
    }
}
