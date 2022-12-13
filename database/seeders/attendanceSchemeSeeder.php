<?php

namespace Database\Seeders;

use App\Models\staffMasterAttendanceScheme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class attendanceSchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scheme=[
            [
                'name'=>'General'
            ],
            [
                'name'=>'Part-Time'
            ],
            [
                'name'=>'Hourly'
            ]
        ];
        staffMasterAttendanceScheme::insert($scheme);
    }
}
