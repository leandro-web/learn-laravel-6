<?php

use App\Models\User;
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
        /* Para criar 10 usuarios randomicos no banco */

        factory(User::class, 10)->create();

        /* Para criar 1 usuario no banco */
        /*
        User::create([
            'name' => 'Leandro Rafael de Oliveira',
            'email' =>'leandro-web@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
        */
    }
}
