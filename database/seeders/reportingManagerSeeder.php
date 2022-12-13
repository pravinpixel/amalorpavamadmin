<?php

namespace Database\Seeders;

use App\Models\staffMasterReportingManager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reportingManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager=[
            [
                'name'=>'Senior Principal'
            ],
            [
                'name'=>'Principal'
            ],
            [
                'name'=>'Headmistress'
            ],
            [
                'name'=>'Asst'
            ],
            [
                'name'=>'Correspondent'
            ],
            [
                'name'=>'Vice-Principal'
            ]
        ];
        staffMasterReportingManager::insert($manager);
    }
}
