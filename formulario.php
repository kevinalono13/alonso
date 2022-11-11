<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de Notas</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="">
        <fieldset>
            <label for="">NOTA 1</label>
            <input type="text" name="numero1">
            <br><br>
            <label for="">NOTA 2</label>
            <input type="text" name="numero2">
            <br><br>
            <input type="submit" value="Calcular">
            
        </fieldset>
    </form>
</body>
</html>
<?php
    if($_POST)
    {
        $num1=$_POST['numero1'];
        $num2=$_POST['numero2'];
        $prom=($num1+$num2)/2;
        echo"Promedio es:".$prom;
    }
?>