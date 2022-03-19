//Pegar GET e POST
var query = location.search.slice(1);
var partes = query.split('&');
var get = {};
partes.forEach(function (parte) {
    var keyValue = parte.split('=');
    var key = keyValue[0];
    var value = keyValue[1];
    get[key] = value;
});

document.getElementById("btn_convert").addEventListener("click", function() {
    html2canvas(document.getElementById("html-content-holder"),{
        allowTaint: true,
        useCORS: true
    }).then(function (canvas) {
        var anchorTag = document.createElement("a");
        document.body.appendChild(anchorTag);
        // document.getElementById("previewImg").appendChild(canvas);
        anchorTag.download = "luan.jpg";
        anchorTag.href = canvas.toDataURL();
        anchorTag.target = '_blank';
        anchorTag.click();
        window.location.href = 'clean.php?img='+data['img'];
    });
});

console.log(get['img']);
$("#preview").css("background-image", "url(uploads/"+ get['img'] + ")");