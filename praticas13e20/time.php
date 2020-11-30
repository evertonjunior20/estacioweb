<?php


echo strftime("%c<br>");
echo strftime (
    "hoje  é %A, dia %d de %B de %G.<br>"
);
echo strftime("são %Hh%M (%T)<br>");

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
?>