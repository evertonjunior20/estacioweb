<?php

$diasemana = $_GET['diasemana'];

switch ($diasemana) {
    case $diasemana =='segunda':
        print("segunda feira");
        break;

    case 'terça':
        print("terça feira"); 
        break; 

    default:
        print("Dia da semana não encontrado" );
        break;

    }



?>