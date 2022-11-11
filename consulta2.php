<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: greenyellow;
        }
    </style>
</head>
<body>
<h1>DIRECTORIO DE EMPLEADOS</h1>
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
$query = 'SELECT `EmployeeID`,`LastName`,`FirstName`,`City`,`Country`,`HomePhone` FROM `employees`';



echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
        <th>ID EMPLEADO</th>
        <th>APELLIDO</th>
        <th>NOMBRE</th>
        <th>CIUDAD</th>
        <th>PAIS</th>
        <th>TELEFONO</th>
      </tr>';


if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1 = $row['EmployeeID'];
        $field2 = $row['LastName'];
        $field3 = $row['FirstName'];
        $field4 = $row["City"];
        $field5 = $row["Country"];
        $field6 = $row['HomePhone'];

        echo '<tr> 
                  <td>'.$field1.'</td> 
                  <td>'.$field2.'</td> 
                  <td>'.$field3.'</td> 
                  <td>'.$field4.'</td> 
                  <td>'.$field5.'</td>
                  <td>'.$field6.'</td>  
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>