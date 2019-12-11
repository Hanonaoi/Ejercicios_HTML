<!-- como empieza cualquier codigo de php -->


<!-- un codigo simple seria */
/* echo "Kaixo"; */

/* en php todo lo que empiece por dolar es una variable. y entre "" tenemos firstname y lastname (escritos igual) */

// echo "<h1>";  podemos hacer titulos de esta manera. //
//    echo $_GET["Izena"]; //
// echo "</h1>"; //
//    echo "<br>";
//    echo $_GET["Pasahitza"]; //


// SI EXISTE IMPRIMELO SINO NO//
//if (iseet($_GET["firstname"])) // -->


<?php

if (isset($_GET["Vivora"]))
    echo $_GET["Vivora"];

if (isset($_GET["Poo"]))
    echo $_GET["Poo"];

if (isset($_GET["Tigresa"]))
    echo $_GET["Tigresa"];

if (isset($_GET["gender"]))
    echo $_GET["gender"];

if (isset($_GET["firstname"]))
    echo $_GET["firstname"];

if (isset($_GET["lastname"]))
    echo $_GET["lastname"];

if (isset($_GET["Oracion"]))
    echo $_GET["Oracion"];

if (isset($_GET["Idiomas"]))
    echo $_GET["Idiomas"];