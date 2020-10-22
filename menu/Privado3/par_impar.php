<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="$_POST">
        <label>La suma de tres dados será:</label><br>
        <input type="radio" name="parimpar" value="Par" checked>Par<br>
        <input type="radio" name="parimpar" value="Impar">Impar<br>
        <input type="submit">        
    </form>    
</body>
</html>
<?php 
    error_reporting(0);
    for($i=0;$i<3;$i++){
        $valor1 = rand(1,6);
        $valor2 = rand(1,6); 
        $valor3 = rand(1,6);                
        $suma = $valor1 + $valor2+$valor3;        
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
    switch($valor3){
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
    if($suma%2==0){
        if($_POST['parimpar']=="Par"){
            echo '
            <script>
                alert("Ganaste, La suma es Par");
            </script>
        ';
        }
        else{
            echo '
            <script>
                alert("Perdiste, La suma es Impar");
            </script>
        ';
        }
    }
    if($suma%2!=0){
        if($_POST['parimpar']=="Par"){
            echo '
            <script>
                alert("Perdiste, La suma es Par");
            </script>
        ';
        }
        else{
            echo '
            <script>
                alert("Ganaste, La suma es Impar");
            </script>
        ';
        }
    }
?>