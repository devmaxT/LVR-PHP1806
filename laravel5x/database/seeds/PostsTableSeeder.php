<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i < 11 ; $i++)
    	{
	        DB::table('posts')->insert([
	        	'title'=> 'NINO',
	        	'contents'=> str_random(50),
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => null  	
       		]);
	    }
    }
}
