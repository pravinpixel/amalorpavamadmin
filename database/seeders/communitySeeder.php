<?php

namespace Database\Seeders;

use App\Models\staffMasterCommunity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class communitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $community=[
        [
            'name'=>'community 1'
        ],
        [
            'name'=>'community 2'
        ],
        [
            'name'=>'community 3'
        ],
        [
            'name'=>'community 4'
        ]
       ];
       staffMasterCommunity::insert($community);
    }
}
