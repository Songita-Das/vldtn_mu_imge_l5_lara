<?php

use Faker\Generator as Faker;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        
             'name'=> $faker->name,
        	'email'=> $faker->email,
        	'date_of_birth'=>$faker->date($format ='y-m-d',$max ='now'),
        	'salary'=> $faker->numberBetween($min =10000,$max =300000),
        	'address'=>$faker->word,
    ];
});
