<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\User')->create([
            'name' => 'Admin',
            'last_name' => 'ApelAdmin',
            'email' => 'admin@devicecare.com',
            'type' => 1,
            'email_verified_at' => now(),
            'password' => 'secret123',
            'remember_token' => Str::random(10)
        ]);

        factory('App\Models\User', 10)->create();
    }
}
