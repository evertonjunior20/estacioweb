<?php

    $salario =($_GET["salario"]);
    $prestacao =($_GET["prestacao"]);
    $parcela = $salario * (30/100);


    if($prestacao <= 300){

        echo "Olá, seu emprestimo foi aprovado";
    

    }else{
        echo "Infelizmente não podemos te liberar o emprestimo nete momento";
    
    }



?>