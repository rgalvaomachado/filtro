<?php
    $modelo = $_GET['modelo'];
    switch($modelo){
        case 3:
            $categoria = '../img/filtro_esportista.png';
            break;
        case 4:
            $categoria = '../img/filtro_fitness.png';
            break;
        case 5:
            $categoria = '../img/filtro_funcional.png';
            break;
        case 6:
            $categoria = '../img/filtro_futebol.png';
            break;
        case 7:
            $categoria = '../img/filtro_lazer.png';
            break;
    }
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/categorias.css" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../img/logo-page.png" />
    <title>Claus Sport - Sistema de Criação de Post</title>
</head>
<body>
    <div class="container preview">
        <form id='upload' method="post" action="../download.php" enctype="multipart/form-data">
            <input type="hidden" name="modelo" value="<?=$categoria?>">
            <div class="row align-items-center">
                <div class="col col-12 col-lg-6">
                    <div id="html-content-holder">
                        <input type="file" name="file" id="upload_in" onchange="previewFile()" hidden/>
                        <label id="upload" for="upload_in">
                            <img id="img-upload" src="<?=$categoria?>">
                        </label>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <button id="btn_convert" type="submit" class="btn btn-lg">Baixar Imagem</button>
                </div>
            </div>
        </form>
    </div>

    <<div class="footer fixed-bottom">
        <img src="../img/hubis.png">
    </div>

    <script src="../libs/jquery-3.6.0.js" type="text/javascript"></script>
    <script src="../libs/html2canvas.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<script>
    function previewFile() {
        var preview = document.querySelector('#img-upload');
        var file    = document.querySelector('input[type=file]').files[0];
        var reader  = new FileReader();
        reader.onloadend = function () {
            preview.style.backgroundImage = "url("+reader.result+")";
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.style.backgroundImage = "url('../img/choice-img.png')";
        }
    }
</script>