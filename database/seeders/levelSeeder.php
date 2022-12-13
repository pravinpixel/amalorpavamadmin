<?php

namespace Database\Seeders;

use App\Models\staffMasterLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class levelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level=[
            [
                'name'=>'HSC'
            ],
            [
                'name'=>'High'
            ],
            [
                'name'=>'Middle'
            ],
            [
                'name'=>'Primary'
            ],
            [
                'name'=>'Pre-Primary'
            ],
            [
                'name'=>'Office'
            ],
            [
                'name'=>'other'
            ]
        ];
        staffMasterLevel::insert($level);
    }
}
