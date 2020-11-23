<?php
    $nome =$_GET["nome"];
    $salario =$_GET["salario"];
    $aumento =$_GET["aumento"];

    $novosalario = $salario +($aumento + $salario/100);

    echo 'Funionario:' . $nome . '<br>Salario:' . $salario . '<br>Aumento%:' . $aumento . '<br>Novo Salario:' . $novosalario;

?>