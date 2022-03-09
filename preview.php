
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
    <link rel="stylesheet" href="preview.css">
    <title>Claus Sport</title>
</head>
<body>
    <center>
       <h1><strong>Ótimo!</strong></h1>
        <h4>Sua imagem esta pronta</h4> 
        <div id="html-content-holder"> 
            <img id="logo-claus" src="uploads/claus.png"/>
            <div id='infos'>
                <h5 id='info'>R$ <?=number_format($_GET['price'], 2, ',', ' ')?></h5>
                <br>
                <h5 id='info'>SKU: <?=$_GET['sku']?></h5>
                <br>
                <h5 id='info'>Modelo: <?=$_GET['model']?></h5>
            </div>
        </div>
        <br>
        <button id="btn_convert" type="button" class="btn btn-sm btn-success input">Baixar imagem</button>
        <br>
        <br>
        <a href="index.php"><u>Voltar para edição</u></a>
        <div id="previewImg" style="display: none;"></div>
    </center>
    <script src="jquery-3.6.0.js" type="text/javascript"></script>
    <script src="html2canvas.js" type="text/javascript"></script>
    <script src="preview.js" type="text/javascript"></script>
</body>
</html>