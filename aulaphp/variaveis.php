<?php

    $acesa = FALSE;

    if($acesa){
        print("primeiro IF, acesa");
    }

    $acesa = TRUE;
    
    if($acesa){
        print("segundo IF,acesa");
    }
    echo "<br/>";

    #Tipo de ponto inteiro
    $variavelInteira = 12345;

    echo $variavelInteira;

    echo "<br/>";

    #Tipo de ponto flutuante
    $notaAvUm = 4.5;
    $notaAvDois = 9.5;

    echo $notaAvUm + $notaAvDois;

    echo"<br/>";
    $listaCPF = array("everton" =>"01249471493", "ozemar"=>"07345842110");

    echo $listaCPF["everton"];
    echo"<br/>";

    echo $listaCPF ["ozemar"];


?>
