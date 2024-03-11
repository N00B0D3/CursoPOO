<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 002 POO</title>
</head>
<body>
    <?php 
        require_once "caneta.php";
        $c1 = new caneta;
        $c1->cor = "azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
    ?>
</body>
</html>