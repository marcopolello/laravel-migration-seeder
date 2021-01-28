<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Brand::class, function (Faker $faker) {
    return [
      'name' => $faker -> company,
      'logo' => $faker -> url,
      'company_offices' => $faker -> randomNumber,
    ];
});
