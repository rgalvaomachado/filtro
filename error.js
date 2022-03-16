
if(window.screen.width < 800){
    widthHtml = window.screen.width*0.8;
    heightHtml = widthHtml;
}else{
    widthHtml = 500;
    heightHtml = 500;
}

console.log(window.screen.width)
console.log(window.screen.height)

$('#main').css('width', window.screen.width*.9+"px");
$('#main').css('height', window.screen.height+"px");