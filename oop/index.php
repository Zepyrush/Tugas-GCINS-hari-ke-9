<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');


$sheep = new Animal("Shaun");
echo "Name : " . $sheep->name . "<br>";
echo "legs : " . $sheep->legs .  "<br>";
echo "cold blooded : " . $sheep->cold_blooded . "<br>";

echo "<br>";

$kodok = new Frog("Buduk");
echo "Name : " . $kodok->name . "<br>";
echo "legs : " . $kodok->legs .  "<br>";
echo "cold blooded : " . $kodok->cold_blooded . "<br>";
echo $kodok->jump() . "<br>";

echo "<br>";

$sungokong = new Ape("Kera sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs .  "<br>";
echo "cold blooded: " . $sungokong->cold_blooded . "<br>";
echo $sungokong->yell() . "<br>";


?>
