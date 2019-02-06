<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class SamuraisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrasco = [
            [
                'nome' => "Carrasco",
                'idade' => 1000,
                'nome_dojo' => "EJCM",
                'posto' => "Xogum",
                'arma' => "Kurasigama",
                'missoes' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nome' => "Kakaroto",
                'idade' => 25,
                'nome_dojo' => "Kame",
                'posto' => "Instinto Superior",
                'arma' => "Kame Hame Ha",
                'missoes' => 9999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                
            ]
        ];

        DB::table('samurais')->insert($carrasco);

        factory(App\Samurai::class, 10)->create();
    }
}
