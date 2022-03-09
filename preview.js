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
        window.location.href = 'index.php';
    });
});

if(window.screen.width < 800){
    widthHtml = window.screen.width*0.8;
    heightHtml = widthHtml;
}else{
    widthHtml = 500;
    heightHtml = 500;
}

widthLogo = widthHtml*0.3;
heightLogo = widthLogo;

$('#html-content-holder').css('backgroundSize', widthHtml+"px "+heightHtml+"px");
$('#html-content-holder').css('width', widthHtml+"px");
$('#html-content-holder').css('height', heightHtml+"px");

$('#logo-claus').css('width', widthLogo+"px");
$('#logo-claus').css('height', heightLogo+"px");