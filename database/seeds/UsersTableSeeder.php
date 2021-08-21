<?php

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
        DB::table('users')->insert([
            [
            'name' => 'ああああ',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password1234'),
        ],[
            'name' => 'いいいいいい',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('password1289'),
        ]

        ]);
    }
}
