<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProfilePicture;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ProfilePicture::class, function (Faker $faker) {
    return [
        'profile_picture_link' => Str::random(10)
    ];
});
