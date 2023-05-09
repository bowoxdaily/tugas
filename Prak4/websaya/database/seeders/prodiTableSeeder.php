<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert(array(
            ['kode' =>'TI',
            'D4'=>'RPL'],
            ['kode' =>'TM',
            'D3'=>'Teknik Mesin'],
            ['kode' =>'akper',
            'D3'=>'Keperawatan',],
            ['kode' =>'TU',
            'D3'=>'Tata udara'],
            ['kode' =>'TI',
            'D3'=>'Teknik Informatika'],
        ));
    }
}
