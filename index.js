if(window.screen.width < 800){
    widthHtml = window.screen.width*0.8;
    heightHtml = widthHtml;
}else{
    widthHtml = 500;
    heightHtml = 500;
}

$('#title').css('font-size',widthHtml*0.1+"px");
$('.input').css('width', widthHtml+"px");
$('#screen-up').css('width', widthHtml*0.8+"px");
$('#screen-down').css('width', widthHtml*1.5+"px");