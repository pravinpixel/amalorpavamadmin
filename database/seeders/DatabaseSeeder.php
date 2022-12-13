<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(permissionSeeder::class);
        $this->call(roleSeeder::class);
        $this->call(userSeeder::class);
        $this->call(institutionSeeder::class);
        $this->call(natureOfEmploymentSeeder::class);
        $this->call(levelSeeder::class);
        $this->call(teachingTypeSeeder::class);
        $this->call(staffCategorySeeder::class);
        $this->call(reportingManagerSeeder::class);
        $this->call(placeOfWorkSeeder::class);
        $this->call(maritalstatusSeeder::class);
        $this->call(casteSeeder::class);
        $this->call(communitySeeder::class);
        $this->call(religionSeeder::class);
        $this->call(designationSeeder::class);
        $this->call(subjectSeeder::class);
        $this->call(attendanceSchemeSeeder::class);
        $this->call(classHandlingSeeder::class);
        $this->call(languagesSeeder::class);
        $this->call(bloodGroupSeeder::class);
        $this->call(appoinmentOrderSeeder::class);

    }
}
