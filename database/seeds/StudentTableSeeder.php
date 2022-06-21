<?php

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'class_id' => 1,
            'teacher_id' => 1,
            'name' => 'Denny',
            'address' => 'Malang',
            'gender' => 'Laki-Laki',
        ]);
    }
}
