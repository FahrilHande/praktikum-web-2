<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("majors")->insert([
            [
                'name' => 'S1 Teknik Informatika',
                'code' => '00001',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'name' => 'S1 Sistem Informasi',
                'code' => '00002',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ]
        ]);
    }
}
