<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="inventario.php">
<table>
    <tr>
        <th>Filial</th>
        <th></th>
        <th>Produto</th>
    </tr>
    <pre>

    <?php
   

    $fi=$_POST["fi"];
    $prod=$_POST["prod"];
    $data = array("fi" => $fi,"prod" => $prod);

    for ($i = 0; $i < $fi; $i++) {
        echo "\n";

        for ($j = 0; $j < $prod; $j++) {
            echo '<input type="number" name="filial[' . $i . '][' . $j . ']" required >';
           
        }
        echo "\n";
       
    }
       
    ?>
    </pre>
    
</table>
        <button type="submit">Calcular</button>
    </form>
    
</body>
</html>