<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[
        		'name'		=> 'Ivan',
        		'last_name'	=> 'Vera',
        		'email'		=> 'Ivanjosevera@gmail.com',
        		'user'		=> 'Ivanjosevera28',
        		'password'	=> \Hash::make('123456'),
        		'type'		=> 'admin',
        		'active'	=> 1,
        		'address'	=> 'Maracaibo, Zulia Av Milagro',
        		'created_at'=> new DateTime,
        		'updated_at'=> new DateTime,
        	],
        	[
        		'name'		=> 'Ornella',
        		'last_name'	=> 'DAlessandro',
        		'email'		=> 'ornella1610@gmail.com',
        		'user'		=> 'ornella1610',
        		'password'	=> \Hash::make('123456'),
        		'type'		=> 'user',
        		'active'	=> 1,
        		'address'	=> 'Maracaibo, Zulia Av Milagro',
        		'created_at'=> new DateTime,
        		'updated_at'=> new DateTime,
        	],

    	);

    	User::insert($data);
	}
}
