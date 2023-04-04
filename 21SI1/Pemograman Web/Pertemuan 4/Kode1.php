<?php

$hello = file("foo.txt");
$hello2 = file_get_contents("foo.txt");
var_dump($hello);
var_dump($hello2);