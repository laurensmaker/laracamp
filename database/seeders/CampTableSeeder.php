<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\camps;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila belajar',
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],

            [
                "title" => 'Baru Mulai',
                'slug' => 'baru mulai',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        //cara 1 untuk tambahkan ke database
        // foreach ($Camps as $key => $camp) {
        //     camps::create($camp);
        // }

        //cara 2
        camps::insert($Camps);
    }
}
