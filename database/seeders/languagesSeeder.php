<?php

namespace Database\Seeders;

use App\Models\staffMasterLanguagesKnown;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class languagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lang=[
            [
                'name'=>'Tamil'
            ],
            [
                'name'=>'English'
            ],
            [
                'name'=>'French'
            ],
            [
                'name'=>'Hindi'
            ]
        ];
        staffMasterLanguagesKnown::insert($lang);
    }
}
