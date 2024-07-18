<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
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
               'name'=>'Student',
               'email'=>'student@gmail.com',
               'role'=> 0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
               'role'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Super admin',
               'email'=>'superadmin@gmail.com',
               'role'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Cashier',
                'email'=>'cashier@gmail.com',
                'role'=> 3,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Teacher',
                'email'=>'teacher@gmail.com',
                'role'=> 4,
                'password'=> bcrypt('123456'),
             ],
            
        ];
    
        foreach ($users as $key => $user) 
        {
            User::create($user);
        }
    }
}