<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'info@projectfoodbank.org'
        ], [
            'name' => 'Admin',
            'email' => 'info@projectfoodbank.org',
            'password' => bcrypt('admin')
        ]);
    }
}
