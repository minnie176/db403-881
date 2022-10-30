<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>

 
  <table>
    <tr>

      <th>Product name</th>
      <th>Units in stock</th>
    </tr>
    
    <tr>
    <?php
$mysqli = new mysqli('db403-mysql', 'root', 'P@sswOrd', 'northwind');
$sql = 'select * from products';
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<td>'.$row['ProductName'].'</td>'; 
  echo '<td>'.$row['UnitsInStock'].'</td>'; 
  
}


?>

 </tr>
 
    <!-- add table rows hear ex.
    <tr>
      <td>Chai</td>
      <td>39</td>
    </tr>
    -->    
  </table>
</body>
</html>