<?php

use Illuminate\Database\Seeder;
use App\Models\AwardStudent;

class AwardStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AwardStudent::create([
            'student_id' => 1,
            'name' => 'prestasi',
            'date' => 'minggu lalu',
            'description' => 'antar kota',
        ]);
    }
}
