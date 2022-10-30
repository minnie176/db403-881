<?php
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <header>
  
  <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category">

        <?php
$mysqli = new mysqli('db403-mysql', 'root', 'P@sswOrd', 'northwind');
$sql = 'select * from categories';
$result = $mysqli->query($sql);
while($row = mysql_fetch_array($result)) 
{
  ?>
  <option value="<?=$row['CategoryName'];?></option>

  <?
 
  }

  ?>
 
  </select>








        
        
          <!-- add options hear ex.
          <option value="1">Beverages</option>
          -->
      
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>