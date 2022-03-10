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
    <link rel="stylesheet" href="index.css">
    <title>Claus Sport</title>
</head>
<body>
    <div id="main">
        <img id="screen-up" src="img/screen-desktop-1-up.png"/>
        <img id="screen-down" src="img/screen-desktop-1-down.png"/>
        <div id="content">
            <form method="post" action="upload.php" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="upload">
                                <h1 id="title"><strong>CRIADOR<br>DE IMAGENS</strong></h1>
                                <div class="form-group has-success">
                                    <input class="form-control input" type="text" name="sku" placeholder="Código SKU" required>
                                </div>
                                <div class="form-group has-success">
                                    <input class="form-control input" type="number" name="price" min="0.00" max="10000.00" step="0.01" placeholder="Preço do Produto" required>
                                </div>
                                <div class="form-group has-success">
                                    <select class="form-control input" name="model" require>
                                        <option value="1">Padrão</option>
                                        <option value="2">Esporte</option>
                                        <option value="3">Lazer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class='upload'>
                                <input type="file" name="file" id="upload" hidden/>
                                <label id="upload" for="upload"></label>
                                <br>
                                <button id="upload-button" type="submit">Criar Imagem</button>
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