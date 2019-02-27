<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i < 12 ; $i++)
    	{
	        DB::table('=product')->insert([
	        	'name' =>str_random(5),
	        	'image' => 'annhii.jpg',
	        	'qty' => (20-$i),
	        	'money' => (20000 - $i*1000),
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => null  	
       		]);
	    }
    }
}
