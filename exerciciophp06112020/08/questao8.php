<?php

$nome = $_GET['nome'];
$contador =1;

for ($contador =1; $contador <=5; $contador++){
     echo  $nome . "<br><br>";
     $nome = "$nome $nome";
}



?>