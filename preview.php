<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claus Sport</title>
    <link href="style.css" rel="stylesheet">
    <link href="preview.css" rel="stylesheet">
    <link href="bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="icon" type="imagem/png" href="img/logo-page.png" />
</head>
<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 coluna">
                <div class="mensagem">
                    <h1> Ótimo!</h1>
                    <p>Sua imagem está pronta</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 coluna">
                <div class="resultado">
                    <div id="html-content-holder">
                        <div class="preview" id="preview">
                            <img class="img-produto" src="img/model-default.png" alt="Imagem">
                            <div class="textopreco">
                                <p class="txtpreco"> R$ <?=$_GET['price']?></p>
                            </div>
                            <div class="textosku">
                                <p class="txtsku"> SKU: <?=$_GET['sku']?></p>
                            </div>
                            <div class="textophone">
                                <p class="txtphone"> 14-99670-6422</p>
                            </div>
                        </div>
                    </div>
                    <button id="btn_convert" type="submit" class="btn btn-lg">Criar Imagem</button>
                    <p class="voltar">
                        <a href="clean.php?img=<?=$_GET['img']?>"><u>Voltar para edição</u></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="position-absolute bottom-0 end-0 fundo-desktop">
            <img id="fundo-desktop" class="img-backgroud-footer" src="img/background-desktop-2.png" alt="Fundo Desktop">
        </div>
    </div>
    <script src="libs/html2canvas.js" type="text/javascript"></script>
    <script src="libs/jquery-3.6.0.js" type="text/javascript"></script>
    <script src="preview.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>