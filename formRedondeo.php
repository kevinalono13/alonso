<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de Notas</title>
    <style>
        form{
            text-align: center;
        }
        fieldset{
            width: 350px     ;
        }
    </style>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST">
        <fieldset>
            <label for="">Total venta</label>
            <input type="number" id="numero1" name="numero1" step="any">
            <br><br>
            <label for="">Pago</label>
            <input type="number" id="numero2" name="numero2" step="any">
            <br><br>
            <input type="submit" value="Calcular">
            
        </fieldset>
    </form>
    <?php
if(isset($_POST['numero1'])){
    $venta=$_POST['numero1'];
    $pago=$_POST['numero2'];
    if(is_numeric($venta)){
        $redondeo=round($venta,1)-$venta;
        echo "Total de venta:". $venta;
        echo "<br>";
        echo "El redondeo es:". $redondeo;
        echo "<br>";
        echo "El pago en efectivo es:". $pago;
        echo "<br>";
        $nvalor=$venta+$redondeo;
        $valorNeto=$venta+$redondeo;
        echo "El Valor neto en Total es:".$valorNeto;
        echo "<br>";
        echo "El vuelto es:". $pago-$nvalor;
        echo "<br>";
    } else{
        echo"Ingresar un valor numerico";
    }

}
?>
