<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'fullname' => 'John Doe',
                'gender' => 'Male',
                'email' => 'test@gmail.com',
                'tel' => '0888888888',
                'age' => 30,
                'address' => '8/88 moo.8 bangkok',
                'avartar' => 'noavartar.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'สมคิด ใจดี',
                'gender' => 'Male',
                'email' => 'somkid@gmail.com',
                'tel' => '02999999999',
                'age' => 19,
                'address' => '9/99 moo.8 bangkok',
                'avartar' => 'noavartar.jpg',
                'status' => 1
            ],
            [
                'fullname' => 'Siriwan Buranakarn',
                'gender' => 'Female',
                'email' => 'siriwan@gmail.com',
                'tel' => '08739829839',
                'age' => 22,
                'address' => '8 bangkok',
                'avartar' => 'noavartar.jpg',
                'status' => 1
            ]
        ]);
    }
}
