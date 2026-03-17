<?php

$idade = $_GET["nome"];
$nome = $_GET["idade"];

echo $nome;

if($idade >= 18){
    echo "Adulto";

} else {
    echo "Menor";
}

?>