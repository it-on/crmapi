<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'ernest',
            'email' => 'ernest@ernest.com',
            'password' => bcrypt('qazxsw1')
        ]);
    }
}
