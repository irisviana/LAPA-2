<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cpf' =>  $faker->unique()->regexify('[0-9]{3}+\.[0-9]{3}+\.[0-9]{3}\-[0-9]{2}'),
        'cpf_verified_at' => now(),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'telephone' => $faker->phoneNumber,
        'user_type' => 'admin',
        'user_description'=>$faker->text($maxNbChars = 200),
        'slug' => $faker->unique()->safeEmail,
    ];
});
