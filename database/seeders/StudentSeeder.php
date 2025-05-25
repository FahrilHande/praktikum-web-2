<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Farhan',
                'student_id_number' => 'F55122071',
                'email' => 'farhan@gmail.com',
                'phone_number' => '6285348203913',
                'birth_date' => '2003-09-28',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1
            ],
            [
                'name' => 'Muty',
                'student_id_number' => 'F55122013',
                'email' => 'muty@gmail.com',
                'phone_number' => '6285323412112',
                'birth_date' => '2003-08-05',
                'gender' => 'Female',
                'status' => 'Inactive',
                'major_id' => 2
            ]
        ]);
    }
}
