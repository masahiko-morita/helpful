<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'もりたま',
            'email' => 'aaa@gmail.com',
            'password' => bcrypt('123456'),
            'gender' => 'Male',
            'content' => 'こんにちは！',
        ]);
        
        DB::table('users')->insert([
            'name' => 'test_123',
            'email' => 'aaa@gmail.com',
            'password' => bcrypt('123456'),
            'gender' => 'Male',
            'content' => 'こんにちは！',
        ]);
    }
}
