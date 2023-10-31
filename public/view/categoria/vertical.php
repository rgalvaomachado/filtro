<head>
    <link href="public/view/categoria/vertical.css" rel="stylesheet">
</head>
<div class="container preview">
    <form id='upload' method="post" action="../download.php" enctype="multipart/form-data">
    <input type="hidden" name="modelo" value="public/img/vertical.png">
        <div class="row align-items-center">
            <div class="col col-12 col-lg-6">
                <div id="html-content-holder">
                    <input type="file" name="file" id="upload_in" onchange="previewFile()" hidden/>
                    <label id="upload" for="upload_in">
                        <img id="img-upload" src="../img/vertical.png">
                    </label>
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <button id="btn_convert" type="submit" class="btn btn-lg">Baixar Imagem</button>
            </div>
        </div>
    </form>
</div>

<script>
    function previewFile() {
        var preview = document.querySelector('#img-upload');
        var file    = document.querySelector('input[type=file]').files[0];
        var reader  = new FileReader();
        reader.onloadend = function () {
            preview.style.backgroundImage = "url("+reader.result+")";
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.style.backgroundImage = "url('../img/choice-img.png')";
        }
    }
</script>