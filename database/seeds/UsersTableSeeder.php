<?php

use App\User;
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
        User::create([
            'name'           => 'Administrator',
            'username'       => 'admin',
            'password'       => 'secret',
            'remember_token' => str_random(10),
        ]);
    }
}
