<?php
    switch($_GET['error']){
        case 1:
            $message = "envie files com as seguintes extensões: jpg, png ou gif.";
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="error.css">
    <title>Claus Sport</title>
</head>
<body>
    <h1><strong>Ops... Algo deu errado!</strong><h1>
    <div id="main">
        <div id="content">
            <form method="post" action="upload.php" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="upload">
                                <h2>Não conseguimos criar a sua imagem,<br> pois <?= $message?>.</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class='upload'>
                                <a href="index.php" id="btn_convert" type="button" class="btn btn-sm btn-success input">Voltar ao início</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    <script src="libs/jquery-3.6.0.js" type="text/javascript"></script>
    <script src="index.js" type="text/javascript"></script>
</body>
</html>