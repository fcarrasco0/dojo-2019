<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class ArmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $armas = [
            [
                'nome' => 'katana',
                'tipo' => "espada",
                'peso' => 7.23,
                'alcance' => 2.5,
                'arremessavel' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nome' => 'wakisashi',
                'tipo' => "espada",
                'peso' => 4.89,
                'alcance' => 1.5,
                'arremessavel' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nome' => 'yari',
                'tipo' => "lanca",
                'peso' => 10.57,
                'alcance' => 3.0,
                'arremessavel' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nome' => 'naginata',
                'tipo' => "lanca",
                'peso' => 9.56,
                'alcance' => 3.0,
                'arremessavel' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nome' => 'kusarigama',
                'tipo' => "corrente, faca",
                'peso' => 4.07,
                'alcance' => 3.0,
                'arremessavel' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nome' => 'tonfa',
                'tipo' => "cassetete",
                'peso' => 3.00,
                'alcance' => 1.0,
                'arremessavel' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nome' => 'shuriken',
                'tipo' => "arremesso",
                'peso' => 1.00,
                'alcance' => 9.0,
                'arremessavel' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nome' => 'kunai',
                'tipo' => "arremesso",
                'peso' => 1.25,
                'alcance' => 9.0,
                'arremessavel' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('armas')->insert($armas);
    }
}
