<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0; $i<10; $i++)
    	{
	        DB::table('member')->insert([
	            'nama' => str_random(10),
	            'alamat' => str_random(10),
	            'no_hp' => str_random(10),
	            'email' => str_random(10).'@gmail.com',
	        ]);
    	}
    }
}
