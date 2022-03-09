if(window.screen.width < 800){
    widthHtml = window.screen.width*0.8;
    heightHtml = widthHtml;
}else{
    widthHtml = 500;
    heightHtml = 500;
}

$('.input').css('width', widthHtml+"px");