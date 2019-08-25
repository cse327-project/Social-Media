<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Request;
use Faker\Generator as Faker;

$factory->define(Request::class, function (Faker $faker) {
    return [
        'sender_id' => rand(35, 49),
        'send_to' => 4
    ];
});
