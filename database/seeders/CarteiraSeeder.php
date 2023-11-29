<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CarteiraSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users')->pluck('id');

        foreach ($users as $id_user) {
            DB::table('carteiras')->insert([
                'nome_carteira' => 'renda variavel',
                'tipo_carteira' => 'renda_variavel',
                'id_user' => $id_user,
            ]);

            DB::table('carteiras')->insert([
                'nome_carteira' => 'renda fixa',
                'tipo_carteira' => 'renda_fixa',
                'id_user' => $id_user,
            ]);
        }
    }
}
