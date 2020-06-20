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
            'name'=> 'Sirius',
            'email'=> 'dj_javier.net@hotmail.com',
            'password'=> bcrypt('javierxxx')

        ]);

        factory(User::class,10)->create();
    }
}
