<?php

require "../vendor/autoload.php";

$hello = new \App\Wcs\Hello();

echo $hello->talk();

echo '<br>';

$sayHello = new \HelloWorld\SayHello();

echo $sayHello->world();


