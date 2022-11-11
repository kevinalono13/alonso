<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            background: green;
            text-align: center;
        }
    </style>
</head>
<body>
<body>
<h1 style=text-aling:none;>Lista de Productos</h1>
<?php
    $servername = "localhost";
    $database = "northwind";
    $username = "root";
    $password = "";
 
    $mysqli = new mysqli("localhost", $username, $password, $database);

    // Check connection
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    //mysqli_close($mysqli);

// Realizar una consulta MySQL
$query = 'SELECT `ProductID`,`ProductName`,`UnitPrice` FROM `products`';



echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
        <th>ID PRODUCTO</th>
        <th>NOMBRE PRODUCTO</th>
        <th>PRECIO UNITARIO</th>
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