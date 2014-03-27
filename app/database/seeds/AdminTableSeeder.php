<?php
class AdminTableSeeder extends Seeder {

    public function run()
    {
        Admin::truncate();

        Admin::create(array(
        					'admin_name' => 'admin',
        					'password' => Hash::make('admin')

        	));
    }

}