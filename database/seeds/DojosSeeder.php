<?php

use Illuminate\Database\Seeder;

class DojosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dojo = [
            'nome' => 'EJCM',
            // 'sensei_id' => 1,
            'alunos_atuais' => 16,
            'alunos_formados' => 87,
            'alunos_reprovados' => 9,
            'renome' => 10,
            'aproveitamento' => 90.62
        ];

        DB::table('dojos')->insert($dojo);

        factory(App\Dojo::class, 7)->create();
    }
}
