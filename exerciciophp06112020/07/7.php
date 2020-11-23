<?php

$area = $_GET['area'];
$litroarea = $area/6;
$galao = 3.6;
$lata = 18;
$precolata = 80;
$precogalao = 25;
$valorgalao = $litroarea/ $galao * $precogalao;
$valorlata = $litroarea / $lata * $precolata;
$quantidadeemlata = $litroarea / $lata;
$quantidadeemgalao = $litroarea / $galao;
  
echo "ORÇAMENTO<br><br>";
echo "<br><br>Situação 1 : " . $litroarea . "litros" . "<br>Quantidade de tinta a ser comprada em Lata: " . $quantidadeemlata . "litros" . "<br>Valor a Pagar R$" . $valorlata . "<br>";
echo "<br><br>Situação 2 : " . $litroarea . "litros" . "<br>Quantidade de tinta a ser comprada em Galão: " . $quantidadeemgalao . "litros" . "<br>Valor a Pagar R$" .$valorgalao;







?>