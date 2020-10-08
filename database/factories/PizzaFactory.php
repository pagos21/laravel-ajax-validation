<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pizza;
use Faker\Generator as Faker;

$factory->define(Pizza::class, function (Faker $faker) {
    return [
        'nome' => $faker -> word(),
        'prezzo' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100), // 48.893
        'disponibile' =>  $faker -> numberBetween($min = 0, $max = 1)
    ];
});
