<?php

$_GET["nome"] = "Carlos"; // simulando entrada de dados
$_GET["idade"] = 25; //simulando entrada de dados

$idade = $_GET["idade"];
$nome = $_GET["nome"];

echo $nome;

if($idade >= 18){
    echo "Adulto";

} else {
    echo "Menor";
}

?>