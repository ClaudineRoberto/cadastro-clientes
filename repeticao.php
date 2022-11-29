<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>

    <h1>Repetição</h1>
    <?php

    $clientes = ["Cleyton","Renata","Pedro","Andrea","Ana","Joao","Paulo","Renan","Fabio","André","Renato","Marcelo"];  
    $contador = 0;
    $clienteslenght = count($clientes);

    while ($contador <= $clienteslenght - 1){
        echo "$clientes[$contador]<br>";
        $contador++;
    }


    ?>
    
</body>
</html>