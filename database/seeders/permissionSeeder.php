<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class permissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission=[
            'name'=>json_encode([
                    'Data center'=>['View'=>false,'Create'=>false,'Delete'=>false,'Edit'=>false],
                    'Users'=>['View'=>false,'Create'=>false,'Delete'=>false,'Edit'=>false,'User export'=>false],
                    'Roles'=>['View'=>false,'Create'=>false,'Delete'=>false,'Edit'=>false],
                    'Help'=>['View'=>false,'Create'=>false,'Delete'=>false,'Edit'=>false],
                    'Table order'=>['View'=>false,'Create'=>false,'Delete'=>false,'Edit'=>false],
                    'Data center'=>['View'=>false,'Create'=>false,'Delete'=>false,'Edit'=>false],
                    'Dashboard'=>['View'=>false,'Get dashBoards counts by filters'=>false],
                    'Data center'=>['View'=>false,'Create'=>false,'Delete'=>false,'Edit'=>false],
                    'Staffs'=>['view'=>false,'edit'=>false,'delete'=>false,'create'=>false],
                    'Download file'=>['Download file'=>false],
                    'Reports'=>['View'=>false,'edit'=>false,'Create'=>false,'Delete'=>false]
            ]),
            'Role_id'=>1
        ];
        Permission::insert($permission);
    }
}
