<?php

    $nome = $_GET['nome'];
    $Nota1 = $_GET['nota1'];
    $Nota2 = $_GET['nota2'];
    $media = ($Nota1 + $Nota2) / 2;

   

    if ($media <= 3){

        echo "Olá, " .$nome . "<br>sua media foi:" . $media . "<br> voce foi reprovado";
       
    }

    elseif($media <= 7 && $media >=3){

        echo "Olá, " .$nome . "<br>sua media foi:" . $media . "<br> você vai precisar fazer exame";
        
    }

    elseif($media >= 7){

        echo "Olá, " .$nome . "<br>sua media foi:" . $media . "<br> você foi aprovado";
        
    }
?>