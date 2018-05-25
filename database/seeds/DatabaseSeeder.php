<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create(
            [
                'email' => 'prasanthats@gmail.com',
                'name'=> 'prasanth'
            ]
        );
        factory(User::class)->create(
            [
                'email' => 'santh@gmail.com',
                'name'=> 'santh'
            ]
        );
        factory(User::class)->create(
            [
                'email' => 'jaiprasanth@gmail.com',
                'name'=> 'jaiprasanth'
            ]
        );
    }
}
