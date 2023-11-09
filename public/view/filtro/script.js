$(document).ready(function() {
    $('#fileinfo').submit(function(e) {
        e.preventDefault();
        $("#downloadFiltro").hide();
        var uniqidFiltro = $("#uniqidFiltro").val();
        var tipo = $("#tipo").val();
        var filesSelected = document.getElementById("upload_in").files;
        var fileToLoad = filesSelected[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoadedEvent) {
            var imagem = fileLoadedEvent.target.result
            $.ajax({
                method: "POST",
                url: "controller/Controller.php",
                data: {
                    metodo: "criarImagem",
                    uniqidFiltro: uniqidFiltro,
                    tipo: tipo,
                    imagem: imagem,
                },
                complete: function(response) {
                    var response = JSON.parse(response.responseText);
                    if(response.access){
                        window.location.assign("download?uniqid_tmp="+response.uniqid_tmp)
                    }
                }
            });
        }
        fileReader.readAsDataURL(fileToLoad);
    })
});

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
        preview.style.backgroundImage = "url('../../../../img/choice-img.png')";
    }
}