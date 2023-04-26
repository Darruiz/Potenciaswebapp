<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $base = $_POST['base'];
    $expoente = $_POST['expoente'];
    
    $resultado = pow($base, $expoente);
    
    echo "A potência de $base elevado a $expoente é igual a $resultado";
}
?>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="style.css"> 
    <title>Calcular potencia</title>
   
</head>
<body>
    <h1>Calcular Potência</h1>
    <?php if (isset($resultado)) { ?>
        <p>O resultado da potência é: <?php echo $resultado; ?></p>
        <form method="get">
            <input type="submit" value="Calcular novamente">
        </form>
    <?php } else { ?>
        <form method="post">
            <label for="base">Base:</label>
            <input type="number" name="base" id="base" required><br><br>
            <label for="expoente">Expoente:</label>
            <input type="number" name="expoente" id="expoente" required><br><br>
            <input type="submit" value="Calcular Potência">
        </form>
    <?php } ?>
    <footer>&copy; Darruiz 2023</footer>
</body>
</html>
