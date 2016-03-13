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
                'name'         	=> 'Edgar',
                'last_name'     => 'Cruz',
                'email'       	=> "edgarxene@gmail.com",
                'user'       	=> "edgarxene",
				'password'      => \Hash::make('123456'),
				'rol'       	=> "admin",
				'active'       	=> 1,
				'address'       => "Av. siempre viva",
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],

            [
                'name'         	=> 'Jacinto',
                'last_name'     => 'Torres',
                'email'       	=> "jacintot68@gmail.com",
                'user'       	=> "batman",
				'password'      => \Hash::make('123456'),
				'rol'       	=> "user",
				'active'       	=> 1,
				'address'       => "Av. Fortuna",
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ]
        );

        User::insert($data);   
    }
}
