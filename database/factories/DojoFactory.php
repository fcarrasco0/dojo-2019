<?php

use Faker\Generator as Faker;

$factory->define(App\Dojo::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'alunos_atuais' => $faker->numberBetween(0, 100),
        'alunos_formados' => $faker->numberBetween(0, 1000),
        'alunos_reprovados' => $faker->numberBetween(0, 1000),
        'renome' => $faker->numberBetween(0, 10)
    ];
});
