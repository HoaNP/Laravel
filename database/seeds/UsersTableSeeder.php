<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('users')->truncate();
    	App\User::create([
    	   	'name' => 'Noname',
    		'email' => 'phuonghoatink22@gmail.com',
    		'password' => bcrypt(1234567890)
    	]);
    }
}
