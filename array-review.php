<?php
/**
 * Created by PhpStorm.
 * User: SHABOSS
 * Date: 1/16/18
 * Time: 6:39 PM
 */


echo "<h2>Part 1</h2>";

$animals = array("panda","alpaca","boa");

function sortFunction($array)
{
    sort($array);
    foreach ($array as $key)
    {
        echo "$key ";
    }
}

function addFunction($string, $animals)
{
    echo "<p>adding $string...</p> ";
    $string = strtolower($string);
    if(!(in_array($string, $animals)))
    {
        array_push($animals, $string);
    }
    sortFunction($animals);
}
sortFunction($animals);
addFunction("goat", $animals);


function addFunction1($string, $animals)
{
    echo "<p>adding $string...</p> ";
    $string = strtolower($string);
    if(!(in_array($string, $animals)))
    {
        array_push($animals, $string);
    }
    sortFunction($animals);
}
addFunction("Boa", $animals);
addFunction("goat", $animals);


echo "<h2>Part 2</h2>";
$flavors['grasshopper'] = "The Grasshopper";
$flavors['maple'] = "Whiskey Maple Bacon";
$flavors['carrot'] = "Carrot Walnut";
$flavors['caramel'] = "Salted Caramel Cupcake";
$flavors['velvet'] = "Red Velvet";
$flavors['lemon'] = "Lemon Drop";
$flavors['tiramisu'] = "Tiramisu";

foreach ($flavors as $flavor => $name)
{
    echo "<input type=\"checkbox\" name=\"flavors[]\" value=\"$flavor\"> $name <br>";
}

?>