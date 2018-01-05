<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [];
    	for ($i = 1; $i <= 10; $i++) {
		    $data[$i] = [
			    'name' => 'Cat ' . $i,
			    'image' => 'cat_' . $i . '.jpg',
		    ];
	    }
	    DB::table('cats')->insert($data);
    }
}
