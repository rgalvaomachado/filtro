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
                url: "/controller/Controller.php",
                data: {
                    metodo: "criarImagem",
                    uniqidFiltro: uniqidFiltro,
                    tipo: tipo,
                    imagem: imagem,
                },
                complete: function(response) {
                    var response = JSON.parse(response.responseText);
                    if(response.access){
                        let filepath = 'tmp/'+response.uniqid_tmp+'.png';
                        downloadFile(filepath, response.uniqid_tmp+'.png')
                        $.ajax({
                            method: "POST",
                            url: "/controller/Controller.php",
                            data: {
                                metodo: "deletarImagem",
                                uniqidFiltro: response.uniqid_tmp,
                            },
                            complete: function(response) {
                                var response = JSON.parse(response.responseText);
                                if(response.access){
                                    window.location.assign("/")
                                }
                            }
                        });
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

function downloadFile(url, fileName){
  fetch(url, { method: 'get', mode: 'no-cors', referrerPolicy: 'no-referrer' })
    .then(res => res.blob())
    .then(res => {
      const aElement = document.createElement('a');
      aElement.setAttribute('download', fileName);
      const href = URL.createObjectURL(res);
      aElement.href = href;
      aElement.setAttribute('href', href);
      aElement.setAttribute('target', '_blank');
      aElement.click();
      URL.revokeObjectURL(href);
    });
};