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
    <center>
        <h1><strong>CRIADOR DE IMAGENS</strong></h1>
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <div class="form-group has-success">
                <input class="form-control input" type="text" name="sku" placeholder="Código SKU" require>
            </div>
            <div class="form-group has-success">
                <input class="form-control input"  type="number" name="price" min="0.00" max="10000.00" step="0.01" placeholder="Preço do Produto" require>
            </div>
            <div class="form-group has-success">
                <select class="form-control input" name="model" require>
                    <option value="1">Padrão</option>
                    <option value="2">Esporte</option>
                    <option value="3">Lazer</option>
                </select>
            </div>
            <input type="file" name="file" id="upload" hidden/>
            <label id="upload" for="upload"></label>
            <br>
            <button type="submit" class="btn btn-sm btn-success input">Criar Imagem</button>
        </form>
    </center>
    <script src="libs/jquery-3.6.0.js" type="text/javascript"></script>
    <script src="index.js" type="text/javascript"></script>
</body>
</html>