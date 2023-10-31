<?php
    $id = $_GET['id'];
    switch($id){
        case 1:
            $categoria = '../img/filtro_esportista.png';
            break;
        case 2:
            $categoria = '../img/filtro_fitness.png';
            break;
        case 3:
            $categoria = '../img/filtro_funcional.png';
            break;
        case 4:
            $categoria = '../img/filtro_futebol.png';
            break;
        case 5:
            $categoria = '../img/filtro_lazer.png';
            break;
    }
?>
<head>
    <link href="public/view/categoria/quadrado.css" rel="stylesheet">
</head>
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