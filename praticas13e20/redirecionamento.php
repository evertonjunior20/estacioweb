<?php

$idade = $_GET['idade'];

    if($idade <= 18){
        header ("location: https://www.rihappy.com.br/");
    }
    else{
        header ("location: https://www.uol.com.br/");

    }




?>