<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'aayush',
            'email' => 'nepalaayushraj24@gmail.com',
            'password' => bcrypt('araachyato'),
        ]);
    }
}
