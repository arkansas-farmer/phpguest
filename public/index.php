<?php

require_once '../vendor/autoload.php';
use Medoo\Medoo;

echo "Hello World!!";

$database = new medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);


echo "<br>After database!<br>";

dump($database);
?>

