<?php

namespace Database\Seeders;

use App\Models\staffMasterReportingManager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class staffCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryStaff=[
            [
                'name'=>'Teaching'
            ],
            [
                'name'=>'Non-Teaching - Office '
            ],
            [
                'name'=>'Non-Teaching - Driver'
            ],
            [
                'name'=>'Non-Teaching - Attender'
            ],
            [
                'name'=>'Non-Teaching - Sanitary Helper'
            ],
            [
                'name'=>'Non-Teaching - Medical'
            ],
            [
                'name'=>'Non-Teaching - Watchman'
            ],
            [
                'name'=>'Non-Teaching - Other'
            ],
        ];
        staffMasterReportingManager::insert($categoryStaff);
    }
}
