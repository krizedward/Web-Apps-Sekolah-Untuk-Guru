<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'id' => 2,
            'name' => 'edward',
            'email' => 'edward@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
