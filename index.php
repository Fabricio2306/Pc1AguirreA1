<!DOCTYPE html>
<html>
    <div name="top" align="center">
         <img src="images/top.jpg" width="1000" height="500"/>
    </div>
    <div name="middle" align="center">
    	<table>
          <?php
            $servername = "us-cdbr-iron-east-03.cleardb.net";
            $username = "b74ba3320e82ec";
            $password = "2d194843";
            $dbname = "ad_bb6ddb2f34daf52";
            $conn = new mysqli($servername, $username, $password, $dbname);
  
            if ($conn->connect_error) {
                         die("Connection failed: " . $conn->connect_error);
             }
             $sql = "SELECT * from servicios";
             $result = $conn->query($sql);
        if ($result->num_rows > 0) {
     
             while($row = $result->fetch_assoc()) {?>
             <tr>
             <td><img src="<?php echo $row['imagen_servicio']?>"/></td>
             <td><?php echo $row['nombre_servicio']?></td>
             <td><?php echo $row['descripcion_servicio']?></td>
            </tr>
     <?php 
     }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
    </div>
    <div name="top" align="center">
         <img src="images/fondo.jpg" width="1000" height="500"/>
    </div>

</body>
</html>
