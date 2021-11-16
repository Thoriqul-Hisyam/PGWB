<?php

namespace Database\Seeders;

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
                 'name'=>'hisyam',
                 'email'=>'hisyam@gmail.com',
                 'password'=>bcrypt('1234567890'),
                 'created_at'=>new \DateTime,
                 'update_at'=> null,
             ],
             [
                 'name'=>'thoriqul',
                 'email'=>'thoriqul@gmail.com',
                 'password'=>bcrypt(1234567890),
                 'created_at'=>new \DateTime,
                 'update_at'=>null,
             ],
            ]; 
            \DB::table('users')->insert($users);
    }
}
