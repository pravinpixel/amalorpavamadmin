<?php

namespace Database\Seeders;

use App\Models\staffMasterAppoinmentOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class appoinmentOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appoinment=[
            ['name'=>'model 1'],
            ['name'=>'model 2'],
            ['name'=>'model 3'],
            ['name'=>'model 4'],
            ['name'=>'model 5'],
            ['name'=>'model 6'],
        ];
        staffMasterAppoinmentOrder::insert($appoinment);
    }
}
