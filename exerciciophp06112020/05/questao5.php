<?php

   $tipo = $_GET['tipo'];
  
   

   if ( $tipo == "professor"){
      echo "você tem até 10dias para devolver";
      
   }
   
   elseif($tipo =="aluno"){

      echo  "Você tem até 3 dias para devolver";

   }
    ?>