/*  <option value="Beverages">Beverages</option>
        <option value="Condiments">Condiments</option>
        <option value="Confections">Confections</option>
        <option value="DairyProducts">Dairy Products</option>
        <option value="Grains">Dairy Products</option> */

        
        <?php $temp_val = 3; ?>
    <td>
    
            
            <option value="2" <?php if($temp_val == "2") echo("selected='selected'")?>>2</option>
            <option value="3" <?php if($temp_val == "3") echo("selected='selected'")?>>3</option>
            <option value="4" <?php if($temp_val == "4") echo("selected='selected'")?>>4</option>
            <option value="5" <?php if($temp_val == "5") echo("selected='selected'")?>>5</option>
        </select>
    </td>
    <?php
                $query = "SELECT id, name FROM peopletable WHERE group=5 ORDER BY name";
                $result = mysqli_query($conn, $query) or die("Error in $query");
                while($info = mysqli_fetch_array($result)){
                ?>

                    <option <!-- cannot figure this code out  --> </option>

                    <?php }?>
            </select>

                <?php if(isset($userid)){
                    echo $userid;
                    }
                ?>  



<?php
$mysqli = new mysqli('db403-mysql', 'root', 'P@sswOrd', 'northwind');
$sql = 'select * from categories';
$result = $mysqli->query($sql);
while($row = mysqli_fetch_array($result)){
<echo "<option value=".$row['CategoryName']"></option>";
?>
</select>






echo "<option value=".$row['CategoryName']."</option>"; 
}
?>