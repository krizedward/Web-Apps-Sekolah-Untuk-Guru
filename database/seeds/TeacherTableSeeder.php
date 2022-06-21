<?php

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'user_id' => 2,
            'school_id' => 1,
            'name' => 'Edward',
            'status_user' => 'Aktif',
        ]);
    }
}
