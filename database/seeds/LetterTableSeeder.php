<?php

use Illuminate\Database\Seeder;
use App\Models\Letter;

class LetterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Letter::create([
            'letter_code' => 'R/01/KP.01/VI/2013',
            'letter_number' => 'Nomor 09/D-IV/02/2022',
            'date' => '1 Juni 2022',
            'subject' => 'Unutk Ke Instansi',
            'purpose' => 'Surat Pengantar',
            'file' => 'doc.doc',
            'description' => 'surat untuk sekolah',
        ]);
    }
}
