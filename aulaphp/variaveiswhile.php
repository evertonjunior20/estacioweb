<?php
        $tipo = $_GET['tipo'];
        $contador =$_GET['contador'];

        if($tipo=='while'){

            while($contador <= 6 ) {
                 print ("<h$contador> Alô Mundo! </h$contador>");

        $contador++;
    }

    }

    if($tipo=='dowhile'){

       do{
        print ("<h$contador> Alô Mundo! </h$contador>");
        $contador++;

       }while($contador<=6);
}

    if($tipo=='for'){

        for($contador = 1; $contador <=10; $contador++){
            print("contador = $contador<br/>");

        if($contador == 5){
            break;
            }
        }
    }






?>