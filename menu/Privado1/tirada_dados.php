<?php 
    for($i=0;$i<5;$i++){
        $numero = rand(1,6);
        switch($numero){
            case 1:{
                echo '<img src="../imagenes/uno.jpg" width="150" height="150">';
                break;
            }
            case 2:{
                echo '<img src="../imagenes/dos.jpg" width="150" height="150">';
                break;
            }
            case 3:{
                echo '<img src="../imagenes/tres.jpg" width="150" height="150">';
                break;
            }
            case 4:{
                echo '<img src="../imagenes/cuatro.jpg" width="150" height="150">';
                break;
            }
            case 5:{
                echo '<img src="../imagenes/cinco.jpg" width="150" height="150">';
                break;
            }
            case 6:{
                echo '<img src="../imagenes/seis.jpg" width="150" height="150">';
                break;
            }
        }
    }
?>