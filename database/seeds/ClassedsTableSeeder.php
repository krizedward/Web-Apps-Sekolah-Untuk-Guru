<?php

use Illuminate\Database\Seeder;
use App\Models\Classed;

class ClassedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 6; $i++) { 
            # code...
            Classed::create([
                'study_level' => 'SD',
                'class_level' => 'Kelas '.$i,
            ]);
        }

        for ($i=1; $i <= 3; $i++) { 
            # code...
            Classed::create([
                'study_level' => 'SMP',
                'class_level' => 'Kelas '.$i,
            ]);
        }

        for ($i=1; $i <= 3; $i++) { 
            # code...
            Classed::create([
                'study_level' => 'SMA',
                'class_level' => 'Kelas '.$i,
            ]);
        }

        for ($i=1; $i <= 3; $i++) { 
            # code...
            Classed::create([
                'study_level' => 'SMK',
                'class_level' => 'Kelas '.$i,
            ]);
        }
        
    }
}
