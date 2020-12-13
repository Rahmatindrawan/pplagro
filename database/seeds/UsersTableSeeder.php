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
        User::create([
            'name' => 'Petani',
            'email' => 'petani1@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
