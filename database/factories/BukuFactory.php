<?php

use App\Models\BukuModel;
use Faker\Generator as Faker;

$factory->define(BukuModel::class, function (Faker $faker) {
    return [
        "nama_buku" => $faker->words(3, true),
        ];
});
