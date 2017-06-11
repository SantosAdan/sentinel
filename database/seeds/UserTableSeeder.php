<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [
        	'name' => 'Usuário Exemplo',
        	'email' => 'user@sentinel.com.br',
        	'password' => bcrypt('123456')
        ];

        User::create($dataArray);
    }
}
