<?php


$ts = mktime(12,30,12, 11,13,2020);
$data = getdate($ts);
echo "$data[hours] horas e $data[minutes] minutos, ano $data[year].<br>";



$ts = mktime(12,30,12, 11,13,2020);
echo strftime("<br>O timestamp $ts equivale a %d/%b/%y, %T<br>" , $ts);


$a = mktime(12,30,12, 11,13,2020);
$b = $a + 60*60; //+1 hora
$c = $b + 60*60*24; //+ 1dia

foreach(array($a,$b,$c) as $t)
echo strftime("<br>%d/%b/%y, %t<br>\n" , $t);

?>