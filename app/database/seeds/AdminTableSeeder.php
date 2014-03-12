<?php
class AdminTableSeeder extends Seeder {

    public function run()
    {
        DB::table('admin')->truncate();

        admin::create(array(
        					'admin_name' => 'admin',
        					'password' => Hash::make('admin')

        	));
    }

}