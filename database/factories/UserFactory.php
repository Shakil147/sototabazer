<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'avator' => 'photo/user.jpg',
        'post' => 'blocked',
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'phone_no' => '+8801',
        'address_1' => 'kacijuli',
        'address_2' => 'Satter Road',
        'zilla_id' => '10',
        'up_zilla_id' => '217',
        'postcode' => '2200',
        'country' => 'Bangladesh',
        'photo' => 'photo/user.jpg',
        'customer_status' => 'new',
    ];
});