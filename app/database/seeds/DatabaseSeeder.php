<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('UserTableSeeder');
		 $this->call('AdminTableSeeder');
	}

}

/*class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->truncate();

        User::create(array('username' => 'test',
        					'email' => 'test@test.com',
        					'password' => Hash::make('admin')

        	));
    }

}

class AdminTableSeeder extends Seeder{
	public function run()
	{
		DB::table('admin')->truncate();
		Admin::create(
				array('admin_name' => "admin",
					'password' => Hash::make('admin')
					)
			);
	}
}*/