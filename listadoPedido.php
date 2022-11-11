<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Consulta Pedido</h1>
    <form action="#" method="POST">
        <fieldset>
            <h2>Ingrese los valores</h2> 
            <label for="tventa">Ingrese N° de pedido</label>
            <input type="number" name="npedido" id="npedido" placeholder="Ingrese N° de pedido" step="any">
            <br><br>
            <input type="submit" value="Consultar">
        </fieldset>
    </form>
    <?php
        $search=$_POST['npedido'];
        include"./conexion.php";
        
        
       
        $query = "SELECT `orderdetails`.`OrderID`, `products`.`ProductName`, `orderdetails`.
        `ProductID`, `orderdetails`.`UnitPrice`, `orderdetails`.`Quantity` 
        FROM `orderdetails` LEFT JOIN `products` ON `orderdetails`.`ProductID` = `products`.`ProductID`
         WHERE `OrderID` = '$search'";
    
        echo '<table border="2" cellspacing="2" cellpadding="2"> 
            <tr> 
                <th>ID DEL PRODUCTO</th>
                <th>NOMBRE DEL PRODUCTO</th>
                <th>PRECIO POR UNIDAD</th>
            </tr>';


        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $field1 = $row['ProductID'];
                $field2 = $row['ProductName'];
                $field3 = $row['UnitPrice'];

                echo '<tr> 
                        <td>'.$field1.'</td> 
                        <td>'.$field2.'</td> 
                        <td>'.$field3.'</td> 

                    </tr>';
            }
            $result->free();
        }
        ?>
</body> 
</html>