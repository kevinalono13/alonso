<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        table tbody tr:nth-child(odd) {
	background: #23bbcf;
}
table tbody tr:nth-child(even) {
	background: #c3d332;
}
table thead {
  background: #444;
  color: rgb(124, 82, 241);
  font-size: 18px;
}
table {
  border-collapse: collapse;
  width: 100%;
}
    </style>
</head>
<body>
<form action="#" target="" method="POST">
    <label for="categoria">Seleccion de la categoria</label>
    <select type="text" name="categoria">
        <option value=""></option>
        <option value="Breverages">Breverages</option>
        <option value="Condiments">Condiments</option>
        <option value="Confections">Confections</option>
        <option value="Produce">Produce</option>
        <option value="Seafood">Seafood</option>
        <option value="Daire Products">Daire Products</option>
        <option value="Grains/Cereals">Grains/Cereals</option>
        <option value="Meat/">Grains/Cereals</option>

    </select>
    <input type="submit" value="consultar"/>
</form> 
<h1>DIRECTORIO DE CLIENTES</h1>
<?php
    $search=$_POST['ncategorias '];
    include"./conexion.php";

    

// Realizar una consulta MySQL
$query = "SELECT `products`.`ProductID`, `products`.`ProductName`, `products`.`UnitPrice`, `categories`.`CategoryName` FROM `products` LEFT JOIN `categories` ON `products`.`CategoryID` = `categories`.`CategoryID`WHERE `categories`.`CategoryName`= '$search'";

// Mostrar los datos en una tabla
if(isset($_POST['categoria'])){
echo '<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
        <th>ID PRODUCTO</th>
        <th>NOMBRE DEL PRODUCTO</th>
        <th>PRECIO UNITARIO</th>        
        <th>CATEGORIA</th>
      </tr>';
    }
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
      $field1 = $row["ProductID"];
      $field2 = $row["ProductName"];
      $field3 = $row["UnitPrice"];
      $field4 = $row["CategoryName"];
       
  
        echo '<tr> 
                  <td>'.$field1.'</td> 
                  <td>'.$field2.'</td> 
                  <td>'.$field3.'</td> 
                  <td>'.$field4.'</td> 
              </tr>';
    }
    $result->free();
} 

?>
</body>
</html>