<?php
    switch($_GET['error']){
        case 1:
            $message = "Por favor, envie files com as seguintes extensões: jpg, png ou gif.";
            break;
        case 2:
            $message = "O file enviado é muito grande, envie files de até 100mb";
            break;
        case 3:
            $message = "Não foi possível enviar o file, tente novamente";
            break;
        case 4:
            $message = "Nenhum arquivo foi selecionado";
            break;
        case 5:
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="error.css">
    <title>Claus Sport</title>
</head>
<body>
    <!-- <img id="screen-up" src="img/screen-desktop-4-up.png"/> -->
    <div id="main">
        <?= $message?>
        <br>
        <a href='index.php'>Voltar</a>  
    </div>
    <script src="libs/jquery-3.6.0.js" type="text/javascript"></script>
    <script src="error.js" type="text/javascript"></script>
</body>
</html>