<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'programador',
            'email'=>'programador@programador.com',
            'password'=> bcrypt('123123')
        ]);

        User::create([
            'name' => 'desarrollador',
            'email'=>'desarrollador@desarrollador.com',
            'password'=> bcrypt('123123')
        ]);
    }
}
