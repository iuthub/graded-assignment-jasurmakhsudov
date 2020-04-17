<?php

use Illuminate\Database\Seeder;
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
        $users = new User([
        	'name'=>'Jasur',
        	'email'=>'j.makhsudov@student.inha.uz',
        	'password'=>Hash::make('jasur')

        ]);
        $users->save();
    }
}