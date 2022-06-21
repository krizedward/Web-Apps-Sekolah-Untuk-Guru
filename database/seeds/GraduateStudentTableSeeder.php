<?php

use Illuminate\Database\Seeder;
use App\Models\GraduateStudent;

class GraduateStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GraduateStudent::create([
            'student_id' => 1,
            'pass_year' => '2022',
            'generation' => '1',
            'employee_status' => 'Belum Kerja',
            'employee_detail' => 'Kerja Di PLN',
        ]);
    }
}
