<?php
$numero = $_GET['numero'];


switch ($numero) {
    case ($numero >=100 && <=200):
        print($numero);
        break;
 

    default ($numero <=100):
        print("encerrado" );
        break;

    }
  
?>