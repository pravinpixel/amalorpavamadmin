<?php

namespace Database\Seeders;

use App\Models\staffMasterTeachingType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class teachingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachingType=[
            [
                'name'=>'teaching'
            ],
            [
                'name'=>'nonTeaching'
            ]
        ];
        staffMasterTeachingType::insert($teachingType);
    }
}
