<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "sistema_biblioteca";

if ($con = mysqli_connect($server, $user, $pass, $bd)){
    //echo "Conectado";
} else {
    echo "Erro!";
}