<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert(array(
            ['nim'=> '220303031',
            'nama'=> 'Nadia',
            'prodi'=>'D3TI',
            'Angkatan'=>'2022'],
            ['nim'=> '22030303',
            'nama'=> 'zahra',
            'prodi'=>'D3TI',
            'angkatan'=>'2022']
        ));
    }
}
