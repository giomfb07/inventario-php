<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table>
    <tr>
        <th>Filial</th>
        <th></th>
        <th>Produto</th>
        <th></th>
        <th>Unidade(s)</th>
    </tr>

    <?php
    $filiais_produtos = $_POST['filial']; 

   
    foreach ($filiais_produtos as $i => $filial) {
        foreach ($filial as $j => $produto) {
            echo "Filial - $i, Produto: " . $produto . "<br>";
        }
    }
    ?>
</table>

</body>
</html>