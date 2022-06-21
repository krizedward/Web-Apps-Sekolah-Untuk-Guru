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
    }
}
