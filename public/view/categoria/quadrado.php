<head>
    <link href="public/view/categoria/quadrado.css" rel="stylesheet">
</head>
    <div class="preview">
        <div id="html-content-holder">
            <input type="file" name="file" id="upload_in" onchange="previewFile()" style="display: none;"/>
            <label id="upload" for="upload_in">
                <img id="img-upload" src="../categoria/<?php echo $_GET['id']?>.png">
            </label>
        </div>
        <button id="btn_convert" class="btn btn-lg" onclick="downloadFiltro()">Baixar Imagem</button>
    </div>
</body>