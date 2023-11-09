<head>
    <link href="/public/view/filtro/style.css" rel="stylesheet">
    <script src="/public/view/filtro/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<?php
    switch($_GET['tipo']){
        case '2':
            $class = "quadrado";
            break;
        case '3':
            $class = "vertical";
            break;
        default:
            $class = "default";
            break;
    }
    
?>
<div class="preview <?php echo $class ?>" style="<?php ?>">
    <form id="fileinfo" enctype="multipart/form-data">
        <div id="html-content-holder">
            <input type="file" name="file" id="upload_in" onchange="previewFile()" style="display: none;"/>
            <input type="hidden" id='uniqidFiltro' value="<?php echo $_GET['filtro']?>">
            <input type="hidden" id='tipo' value="<?php echo $_GET['tipo']?>">
            <label id="upload" for="upload_in">
                <img id="img-upload" src="../filtro/<?php echo $_GET['filtro']?>.png">
            </label>
        </div>
        <button id="btn_convert" class="btn btn-lg">Criar Imagem</button>
    </form>
</div>