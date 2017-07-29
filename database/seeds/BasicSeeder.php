<?php

use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		'nama_siswa'=>'Arnaz M Prakasa',
    	];

    	DB::table('t_siswa')->insert($data);

    	$data = [
    		'nama_siswa'=>'John Doe',
    	];

    	DB::table('t_siswa')->insert($data);
    }
}
