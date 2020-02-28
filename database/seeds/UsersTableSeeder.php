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

        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@dev.com',
                'password' => bcrypt('20150012')
            ]
        ];


        foreach ($users as $key => $value) {
            User::create($value);
        }

    }
}
