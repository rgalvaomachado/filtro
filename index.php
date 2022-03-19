<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <div class="position-relative">
        <div class="position-absolute top-0 start-0">
            <img class="img-backgroud-top" src="img/logo-claus.png" alt="logo-claus">
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
                <div class="col-sm-12 col-md-6 coluna">
            <form method="post" action="upload.php" enctype="multipart/form-data">
                        <div class="titulo">
                            <h1><strong>CRIADOR <br/> DE IMAGENS</strong></h1>
                        </div>
                        <div class="form-group">
                            <input type="number" name="sku" class="form-control form-control-lg" id="InputSKU" placeholder="Código SKU">
                        </div>
                        <div class="form-group">
                            <input type="number" min="0.00" max="10000.00" step="0.01" name="price" class="form-control form-control-lg" id="InputPreco" placeholder="Preço">
                        </div>
                        <div class="form-group">
                            <select class="form-select form-select-lg" name="model" id="SelectModelo">
                                <option selected value="1">Padrão</option>
                                <option value="2">Esporte</option>
                                <option value="3">Lazer</option>
                            </select>
                        </div>
                </div>
                <div class="col-sm-12 col-md-6 coluna">
                    <div>
                        <input type="file" name="file" id="upload"/>
                        <label id="upload" for="upload"></label>
                        <!-- <img class="img-upload" src="img/choice-img.png" alt="Imagem"> -->
                    </div>
                    <div>
                        <button type="submit" class="btn btn-lg">Criar Imagem</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
    <div class="position-relative">
        <!-- <div class="position-absolute bottom-0 end-0 fundo-desktop">
            <img id="fundo-desktop" class="img-backgroud-footer" src="img/background-desktop-1.png" alt="Fundo Desktop">
        </div> -->
        <!-- <div class="position-absolute bottom-0 end-0 fundo-mobile">
            <img id="fundo-mobile" class="img-backgroud-footer" src="img/background-mobile-1.png" alt="Fundo Mobile">
        </div> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>