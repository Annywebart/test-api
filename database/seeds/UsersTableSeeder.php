<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
		    'name' => 'Admin',
		    'email' => 'admin@admin.com',
		    'password' => bcrypt('123123'),
	    ];
    	
    	if(!User::whereEmail($data['email'])->first()) {
		    DB::table('users')->insert($data);
	    }
    }
}
