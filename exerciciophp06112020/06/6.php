<?php
$diadomes = $_GET['diadomes'];


switch ($diadomes){
    case $diadomes == '1':
    echo "janeiro";
break;

case  '2':
    echo "fevereiro";
break;

case '3':
    echo "março";
break;

case '4':
    echo "abril";
break;

case '5':
    echo "maio";
break;

case '6':
    echo "junho";
break;

case '7':
    echo "julho";
break;

case '8':
    echo "agosto";
break;

case '9':
    echo "setembro";
break;

case '10':
    echo "outubro";
break;

case '11':
    echo "novembro";
break;

case '12':
    echo "dezembro";
break;

case ($diadomes) >= 12:
    echo "Não existe mês com este número";
break;
}



?>