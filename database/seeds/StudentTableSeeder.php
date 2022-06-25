<?php

use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Student::create([
        //     'class_id' => 1,
        //     'teacher_id' => 1,
        //     'nis' => '12345678',
        //     'nisn' => '1234567890',
        //     'name' => 'Denny',
        //     'place_of_birth' => 'Malang',
        //     'date_of_birth' => '2017-01-01',
        //     'religion' => 'islam',
        //     'address' => 'jl durian no 1',
        //     'gender' => 'laki-laki',
        //     'name_student_guardian' => 'Budi',
        //     'status_student_guardian' => 'Orang Tua',
        // ]);
        
        $religion = array(
            "Kristen",
            "Islam",
            "Katolik",
            "Hindu",
            "Budha",
            "Konghucu",
        
        );

        $ssg = array(
            "Orang Tua",
            "Kerabat Dekat",
            "Kerabat Jauh",
        
        );

        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		// DB::table('pegawai')->insert([
    		// 	'pegawai_nama' => $faker->name,
    		// 	'pegawai_jabatan' => $faker->jobTitle,
    		// 	'pegawai_umur' => $faker->numberBetween(25,40),
    		// 	'pegawai_alamat' => $faker->address
    		// ]); 

            Student::create([
                'class_id' => 1,
                'teacher_id' => 1,
                'nis' => $faker->numberBetween(100,999),
                'nisn' => $faker->numberBetween(0,100000),
                'name' => $faker->firstName,
                'place_of_birth' => $faker->city,
                'date_of_birth' => $faker->date($format = 'Y-m-d'),
                'religion' => $faker->randomElement($religion),
                'address' => $faker->address,
                'gender' => $faker->randomElement(['Laki-Laki', 'Perempuan']),
                'name_student_guardian' => $faker->name,
                'status_student_guardian' => $faker->randomElement($ssg),
                'photo_student' => 'photoStudent/images.jpg',
            ]);
 
    	}
    }
}
