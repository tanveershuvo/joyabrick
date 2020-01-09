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
        $user = new User;
        $user->name = 'Tanveer';
        $user->email = 'tanveer@gmail.com';
        $user->password = bcrypt('123456');
        $user->role = '1';
        $user->save();

        $user = new User;
        $user->name = 'X';
        $user->email = 'x@gmail.com';
        $user->password = bcrypt('123456');
        $user->role = '2';
        $user->save();

        $user = new User;
        $user->name = 'Y';
        $user->email = 'y@gmail.com';
        $user->password = bcrypt('123456');
        $user->role = '0';
        $user->save();
    }
}
