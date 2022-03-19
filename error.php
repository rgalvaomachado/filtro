<?php
    switch($_GET['error']){
        case 1:
            $message = "a extensão não é permitida, envie novamente com as seguintes extensões: jpg, png ou gif.";
            break;
        case 2:
            $message = "o file enviado é muito grande, envie files de até 100mb";
            break;
        case 3:
            $message = "não foi possível enviar o file, tente novamente";
            break;
        case 4:
            $message = "nenhum arquivo foi selecionado";
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
        <title>Document</title>
        <link href="style.css" rel="stylesheet">
        <link href="erro.css" rel="stylesheet">
        <link href="bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body>
        <div class="position-relative">
            <div class="position-absolute top-0 start-0">
                <!-- <img class="img-backgroud-top" src="img/background-desktop-4.png" alt="logo-claus"> -->
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center linha-titulo">
                <div class="coluna">
                    <div class="titulo">
                        <p class="titulo"><strong>Ops... Algo deu errado!</strong></p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center linha-mensagem">
                <div class="col-sm-12 col-md-6 coluna">
                    <p class="mensagem">Não conseguimos criar a sua imagem, <br/> pois <?=$message?>.</p>
                </div>
                <div class="col-sm-12 col-md-6 coluna">
                    <a href="index.php" type="button" class="btn btn-lg">Voltar ao início</a>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html> 