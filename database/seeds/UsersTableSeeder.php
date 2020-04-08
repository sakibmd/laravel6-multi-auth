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
            'name' => 'Sakib Mohammed',
            'role_id' => '1',
            'email' => 'sakib@gmail.com',
            'password' => bcrypt('rootadmin')
        ]);

        DB::table('users')->insert([
            'name' => 'Hasan Mohammed',
            'role_id' => '2',
            'email' => 'hasan@gmail.com',
            'password' => bcrypt('rootauthor')
        ]);


        DB::table('users')->insert([
            'name' => 'Shaker Ahmed',
            'role_id' => '2',
            'email' => 'shaker@gmail.com',
            'password' => bcrypt('rootauthor')
        ]);
    }
}
