<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H1>LISTA DE EMPLEADOS</H1>    
<?php
$servername = "localhost";
$database = "northwind";
$username = "root";
$password = "";
$mysqli = new mysqli($servername, $username, $password, $database);
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$query="SELECT *FROM employees";
$result=mysqli_query($mysqli,$query);

while ($row= mysqli_fetch_array($result))
{
    print ("<TR><BR>");
    print("<TD>$row[LastName]</TD>\n");
    print("<TD>$row[FirstName]</TD>\n");
    print ("<TR><BR>");
    
}

print_r($result);
?>

 
</body>
</html>
include"./conexion.php";

echo '<table border="1" cellspacing="2" cellpadding="2"> 
<tr> 
    <th>ID PRODUCTO</th>
    <th>NOMBRE PRODUCTO</th>
    <th>PRECIO UNITARIO</th>
</tr>';

$result=mysqli_query($mysqli,"SELECT * FROM orderdetails");
if($_POST){
    $search=$_POST['npedido'];
    if (!empty($search)){
        $query="SELECT * FROM orderdetails WHERE OrderID LIKE '%$search%'";
        $result=mysqli_query($mysqli,$query);
        $data=$resuilt->fetch_all();
        $field1 = $row['ProductID'];
        $field2 = $row['ProductName'];
        $field3 = $row['UnitPrice'];
        echo '<tr> 
        <td>'.$field1.'</td> 
        <td>'.$field2.'</td> 
        <td>'.$field3.'</td> 
         
    </tr>';
        
    }
   
}