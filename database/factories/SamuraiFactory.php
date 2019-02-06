<?php

use Faker\Generator as Faker;

$factory->define(App\Samurai::class, function (Faker $faker) {

    $armas = ['katana', 'wakisashi', 'yari', 'naginata', 'kusarigama', 'tonfa', 'shuriken', 'kunai'];
    $key = array_rand($armas, 1);

    return [
        'nome' => $faker->name,
        'idade' => $faker->numberBetween(17, 65),
        'arma' => $armas[$key],
        'posto' => "kohai",
        'missoes' => $faker->numberBetween(0, 150)
    ];
});
