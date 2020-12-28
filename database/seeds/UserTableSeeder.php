<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [[
            'name'              =>  "Adela",
            'last_name'         =>  "Pruebas",
            'email'              =>  "Adela@gmail.com",
            'user'              =>  "Adela",
            'password'              =>  \Hash::make("123456"),
            'active'              =>  1,
            'address'              =>  "Direccion X",
            'created_at'              =>  new DateTime,
            'updated_at'              =>  new DateTime
        ]];

        User::insert($data);
    }
}