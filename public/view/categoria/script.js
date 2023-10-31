function downloadFiltro(){
    html2canvas(document.getElementById("img-upload"),{
        allowTaint: true,
        scale:5,
    }).then(function (canvas) {
        var anchorTag = document.createElement("a");
        document.body.appendChild(anchorTag);
        anchorTag.download = " Verso.png";
        anchorTag.href = canvas.toDataURL();
        anchorTag.target = '_blank';
        anchorTag.click();
    });
}

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