<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    Student::insert([
    //     [
    //     'name' => 'Samsudin',
    //     'email' => 'samsudin@example.com',
    //     'phone' => '081234567890',
    //     'address' => 'Jl. Merdeka No. 123',
    //     ],

    //     [
    //     'name' => 'Samsudin',
    //     'email' => 'samsudin@example.com',
    //     'phone' => '081234567890',
    //     'address' => 'Jl. Merdeka No. 123',
    //     ],

    // ]);
    
    Student::factory(50)->create();

    }
}
