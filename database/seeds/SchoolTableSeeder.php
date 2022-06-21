<?php

use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create([
            'name' => 'SMK Negri 1 Malang',
            'address' => 'Malang',
        ]);
    }
}
