<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => "GILA BELAJAR",
                'slug' => "gila-belajar",
                'price' => 280,
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ],
            [
                'title' => "BARU MULAI",
                'slug' => "baru-mulai",
                'price' => 140,
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time()),
            ],
        ];

        Camp::insert($camps);
    }
}
