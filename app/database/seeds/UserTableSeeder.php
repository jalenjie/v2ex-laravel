<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        User::truncate();

        User::create(array('username' => 'jalen',
        					'email' => 'test@test.com',
        					'password' => Hash::make('admin')

        	));
    }

}