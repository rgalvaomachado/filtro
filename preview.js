//Pegar GET e POST
var query = location.search.slice(1);
var partes = query.split('&');
var data = {};
partes.forEach(function (parte) {
    var chaveValor = parte.split('=');
    var chave = chaveValor[0];
    var valor = chaveValor[1];
    data[chave] = valor;
});

document.getElementById("btn_convert").addEventListener("click", function() {
    html2canvas(document.getElementById("html-content-holder"),{
        allowTaint: true,
        useCORS: true
    }).then(function (canvas) {
        var anchorTag = document.createElement("a");
        document.body.appendChild(anchorTag);
        document.getElementById("previewImg").appendChild(canvas);
        anchorTag.download = "luan.jpg";
        anchorTag.href = canvas.toDataURL();
        anchorTag.target = '_blank';
        anchorTag.click();
        window.location.href = 'clean.php?img='+data['img'];
    });
});

if(window.screen.width < 800){
    widthHtml = window.screen.width*0.8;
    heightHtml = widthHtml;
}else{
    widthHtml = 500;
    heightHtml = 500;
}

$('#html-content-holder').css('backgroundSize', widthHtml+"px "+heightHtml+"px");
$('#html-content-holder').css('width', widthHtml+"px");
$('#html-content-holder').css('height', heightHtml+"px");

$('#template').css('width', widthHtml+"px");
$('#template').css('height', heightHtml+"px");

$("#html-content-holder").css("background-image", "url(uploads/"+ data['img'] + ")");