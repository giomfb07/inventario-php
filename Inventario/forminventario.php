<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="inventario.php">

    <pre>

    <?php
   echo'<table border>
    
   <tr>
   <th>Filial</th>
    <th>Produto</th>
   </tr>';

    $fi=$_POST["fi"];
    $prod=$_POST["prod"];
    $data = array("fi" => $fi,"prod" => $prod);

    for ($i = 0; $i < $fi; $i++) {
        echo " <tr>";
      

        for ($j = 0; $j < $prod; $j++) {
            
          
            echo '<td><input type="number" name="filial[' . $i . '][' . $j . ']" required ></td>';
          
           
        }
        echo  "</tr>";
       
    }
       
    ?>
    </pre>
    

        <button type="submit">Calcular</button>
    </form>
    
</body>
</html>