<head>
    <link href="/public/view/filtro/style.css" rel="stylesheet">
    <script src="/public/view/filtro/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<?php
    switch($_GET['tipo']){
        case '1':
            $class = "story";
            break;
        case '2':
            $class = "post_quadrado";
            break;
        case '3':
            $class = "post_vertical";
            break;
        default:
            $class = "default";
            break;
    }
    
?>
<div class="preview">
    <form id="fileinfo" enctype="multipart/form-data">
        <div id="html-content-holder" class="<?php echo $class ?>">
            <input type="file" name="file" id="upload_in" onchange="previewFile()" style="display: none;"/>
            <input type="hidden" id='uniqidFiltro' value="<?php echo $_GET['filtro']?>">
            <input type="hidden" id='tipo' value="<?php echo $_GET['tipo']?>">
            <label id="upload" for="upload_in">
                <img id="img-upload" src="<?php echo $_ENV['DIRECTORY_FILTROS'].$_GET['filtro']?>.png">
            </label>
        </div>
        <br>
        <button id="btn_convert" type="submit" class="btn btn-lg">Criar Imagem</button>
    </form>
    <img id="load" src="/public/img/load.gif">

    <form id="download" action="public/scripts/download.php" method="post">
        <input type="hidden" name='uniqid_tmp' id='uniqid_tmp'>
        <button class="btn btn-lg" type="submit" id="btn_download" value="Download">Download!</button>
    </form>

    <button id="btn_back" type="button" class="btn btn-lg" onclick="voltar()">Voltar</button>
</div>