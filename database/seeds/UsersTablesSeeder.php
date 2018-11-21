<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'John Smith',
            'email'    => 'john_smith@gmail.com',
            'password'   =>  'johnsmith',
            'remember_token' =>  str_random(10),
        ]);
    }
}
