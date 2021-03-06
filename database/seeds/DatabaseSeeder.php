<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClassedsTableSeeder::class);
        $this->call(SchoolTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(AwardStudentTableSeeder::class);
        $this->call(GraduateStudentTableSeeder::class);
        $this->call(LetterTableSeeder::class);
    }
}
