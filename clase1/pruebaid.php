<?php

require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

echo Uuid::uuid4()->toString().PHP_EOL;

?>