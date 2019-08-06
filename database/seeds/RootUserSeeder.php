<?php

use Illuminate\Database\Seeder;
use App\User;

class RootUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => config('app.root.first_name', 'Root'),
            'last_name' => config('app.root.last_name', 'User'),
            'email' => config('app.root.email', 'root@webapp.com'),
            'password' => config('app.root.password', Hash::make('123456789'))
        ]);

        //@todo add root role

    }
}
