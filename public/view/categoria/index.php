<head>
    <link href="/public/view/categoria/style.css" rel="stylesheet">
    <script src="/public/view/categoria/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<?php
    $id = $_GET['id'];
    $tipo = $_GET['tipo'];
?>
<div class="preview">
    <div id="html-content-holder">
        <input type="file" name="file" id="upload_in" onchange="previewFile()" style="display: none;"/>
        <label id="upload" for="upload_in">
            <img id="img-upload" src="../categoria/<?php echo $_GET['id']?>.png">
        </label>
    </div>
    <button id="btn_convert" class="btn btn-lg" onclick="downloadFiltro()">Baixar Imagem</button>
</div>