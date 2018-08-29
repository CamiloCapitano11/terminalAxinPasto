<?php

use Faker\Generator as Faker;

$factory->define(App\shareholder::class, function (Faker $faker) {
    return [
       	'id' => $faker->sentence,
       	'tipo_documento' => $faker->randomElement(['C' ,'T', 'P']),
        'sexo' => $faker->randomElement(['Mujer', 'Hombre','Otro']),
        'nombres' => $faker->sentence,
        'apellidos' => $faker->sentence,
        'n_folio' => $faker->unique()->randomNumber(),
        'direccion' => $faker->sentence,
        'telefo_fijo' => $faker->unique()->randomNumber(),
        'celular' => $faker->unique()->randomNumber(),
        'mail' => $faker->sentence,
        'banco_cuenta' => $faker->sentence,
        'n_cuenta'  => $faker->unique()->randomNumber(),
        'tipo_cuenta' => $faker->randomElement(['Corriente' ,'Ahorros'])
    ];
});
