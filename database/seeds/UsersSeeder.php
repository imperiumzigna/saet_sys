<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->usr_name = "Igor";
        $user->usr_email = "admin@admin.com";
        $user->usr_papel = "admin";
        $user->cpf = "8975938475";
        $user->password = bcrypt('123456');
        $user->save();


        $user = new User();
        $user->usr_name = "Teste";
        $user->usr_email = "teste@teste.com";
        $user->usr_papel = "professor";
        $user->cpf = "342344545";
        $user->password = bcrypt('123456');
        $user->save();


        $user = new User();
        $user->usr_name = "Visitante";
        $user->usr_email = "visitante@visitante.com";
        $user->usr_papel = "visitante";
        $user->cpf = "354568045";
        $user->password = bcrypt('visitante');
        $user->save();
    }
}
