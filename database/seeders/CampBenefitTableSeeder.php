<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\campbenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CampBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro techstack kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'imac pro 2021 & Display'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final project sertificate'
            ],
            [
                'camp_id' => 1,
                'name' => 'offline course vidio'
            ],
            [
                'camp_id' => 1,
                'name' => 'fitur job opportinity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Final project Sertificate'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Vidio'
            ],
        ];

        campbenefit::insert($CampBenefits);
    }
}
