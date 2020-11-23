<?php

    $ValorA = $_GET['ValorA'];

    $ValorB = $_GET['ValorB'];

    if(isset($_GET["somar"])){
        $operacao = $ValorA + $ValorB;

        print("soma: ". $operacao);
    }

    if(isset($_GET["subtrair"])){
       $operacao = $ValorA - $ValorB;

        print("subtrair: ". $operacao);
    }   

    if(isset($_GET["multiplicar"])){
      $operacao = $ValorA * $ValorB;

        print("multiplicar: ". $operacao);
    }

    if(isset($_GET["dividir"])){
      $operacao = $ValorA / $ValorB;

       print("dividir: ". $operacao);
    }




?>