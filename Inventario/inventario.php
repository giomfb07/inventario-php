<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table>

    <?php
    $filiais_produtos = $_POST['filial']; 
    $totali = "0";

    echo'<table border>
    
    <tr>
    <th></th>
    <th>Filial</th>
     <th>Produto</th>
    <th>Total</th>
    </tr>
    
   ';
    
   
    foreach ($filiais_produtos as $i => $filial) {
       
        foreach ($filial as $j => $produto) {
            $total = $i + $produto;
            echo "<tr> <th></th> <th> $i </th><th>". $produto . "</th><th> $total <br></th></tr>";
            $totali = $totali+$i;
        }
    }
        echo "<tr><th> Total </th><th>". $totali . "</th></tr>";
   
    ?>
</table>

</body>
</html>