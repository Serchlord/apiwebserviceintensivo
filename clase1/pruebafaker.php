<?php

require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

$faker = Faker\factory::create();

$arr = [];

for ($i = 1; $i < 10; $i++) {
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
    array_push($arr, $obj);
}

$enJson = json_encode($arr);

echo $enJson.PHP_EOL;

?>