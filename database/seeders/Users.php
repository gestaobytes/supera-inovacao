<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Users extends Seeder
{

    public function run() {
        if (DB::table('users')->get()->count() == 0) {
            DB::table('users')->insert([
                [
                    'uuid' => Str::uuid(),
                    'fullname' => 'Leandro Costa Macedo',
                    'email' => 'lcmacedo07@gmail.com',
                    'password' => (new BcryptHasher)->make('123456'),
                    'status' => 1,
                    'created_at' => date('Y-m-d H:i:s')
                ],
            ]);
        } else {
            echo "\e[User não é uma tabela vazia. Não foi efetuado o Seed.";
        }
    }
}
