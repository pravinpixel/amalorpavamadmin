<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
            [ 'name'=>'super admin'],
            [ 'name'=>'admin'],
            [ 'name'=>'staff'],
            [ 'name'=>'students'],
            [ 'name'=>'customer']
        ];
        Role::insert($roles);
    }
}
