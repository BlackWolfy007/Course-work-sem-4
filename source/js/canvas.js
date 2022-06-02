var canvas = document.getElementById("map"),
ctx = canvas.getContext("2d");

canvas.width = 579;
canvas.height = 647;

var background = new Image();
//background.src = "source\img\map.png";

background.onload = function(){
    ctx.drawImage(background,0,0); 
    context.beginPath(); 
    ctx.moveTo(305,340);
    ctx.lineTo(204,375);
    ctx.lineWidth=3;
    ctx.strokeStyle = "#ff0000";
    context.stroke();
}