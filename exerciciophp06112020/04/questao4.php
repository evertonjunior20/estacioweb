<?php

    $nome = $_GET['nome'];
    $dias = $_GET['dias'];
   
    $maisde10dias = 40 + $dias * 8;
    $menosde10dias = 40 + $dias * 15;
   
  
    
    if ($dias >=10){

        echo "cliente:" . $nome  . "<br>Valor da diaria mais encargos:" . $maisde10dias;
    }

    
    elseif ($dias <=10){

        echo "cliente:" . $nome ."<br>Valor da diaria mais encargos:"  . $menosde10dias;
    }
   


    ?>