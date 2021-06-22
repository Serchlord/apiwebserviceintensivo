<?php

require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

$faker = Faker\factory::create();

$obj = [
    "id" =>  Uuid::uuid4()->toString(),
    "name" => $faker->name,
    "streetName" => $faker->streetName,
    "buildingNumber" => $faker->buildingNumber,
    "city" => $faker->city,
    "postcode" => $faker->postcode,
    "state" => $faker->state,
    "country" => $faker->country
];

$enJson = json_encode($obj);

echo $enJson.PHP_EOL;

?>