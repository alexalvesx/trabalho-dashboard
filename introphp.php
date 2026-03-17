<?php
    $n1 = 10;
    $n2 = 5;
    $media = ($n1 + $n2) /2;

    echo "A média é: " .$media;
    echo "<br/>";
    //verificar se passou de ano

    if ($media < 7){
        echo "Reprovado";
    } else {
        echo "Aprovado";
    }

?>