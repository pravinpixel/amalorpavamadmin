<?php

namespace Database\Seeders;

use App\Models\staffMasterInstitutionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class institutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ins=[
            [
                'name'=>'Amalorpavam Hr. Sec. School'
            ],
            [
                'name'=>'Amalorpvam Lourds Academy'
            ],
            [
                'name'=>'Rev. Sr. Anthuvanet Hostel'
            ],
            [
                'name'=>'Other'
            ]
        ];
        staffMasterInstitutionType::insert($ins);
    }
}
