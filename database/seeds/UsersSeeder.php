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
        $user->cpf = "89759384752";
        $user->password = bcrypt('123456');
        $user->save();


        $user = new User();
        $user->usr_name = "Luiz Ricardo Ripardo";
        $user->usr_email = "teste@teste.com";
        $user->usr_papel = "professor";
        $user->cpf = "34234454521";
        $user->password = bcrypt('123456');
        $user->save();


        $user = new User();
        $user->usr_name = "Cristiano Ronaldo";
        $user->usr_email = "visitante@visitante.com";
        $user->usr_papel = "visitante";
        $user->cpf = "35456804512";
        $user->password = bcrypt('visitante');
        $user->save();
    }
}
