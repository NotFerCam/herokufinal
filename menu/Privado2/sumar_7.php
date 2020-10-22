<?php 
    $intentos = 0;    
    $suma = 0;
    $valor1 = 0;
    $valor2 = 0;
    for($i=0;$suma!=7;$i++){
        $intentos++;
        $valor1 = rand(1,6);
        $valor2 = rand(1,6);        
        $suma = $valor1 + $valor2;        
    }
    switch($valor1){
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
    switch($valor2){
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
    echo '<h1>Numero de intentos: </h1>',$intentos;

?>