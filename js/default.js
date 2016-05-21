$(document).ready(function () {
    //drawSomething();
    var count = 1;
    var level = 0;
    var color1 = "white";
    var color2 = "black"

    do {
    
        if (count % 2 == 0) {
            drawUsingCssColor(level, color1, color2);
            color1 = "white";
            color2 = "black";
            level += 45;
            count ++;
        }
        else {
            drawUsingCssColor(level, color1, color2);
            color1 = "black";
            color2 = "white";
            level += 45;
            count++;
        }

    } while (count <=8);


    //drawUsingCssColor(0,"white","black");
    //drawUsingCssColor(100,"black","white");
    //drawUsingCssColor(200,"white","black");
    //drawUsingCssColor(300,"black","white");
    //drawUsingCssColor(400, "white", "black");
    //drawUsingCssColor(500, "black", "white");
    //drawUsingCssColor(600, "white", "black");
    //drawUsingCssColor(700, "black", "white");
    //drawUsingCssColor(400, "white", "black");
    //drawUsingCssColor(500, "black", "white");
    //drawUsingCssColor(600, "white", "black");
    //drawUsingCssColor(700, "black", "white");

});
//function drawSomething() {
//    var canvas = document.getElementById('myCanvas');
//    var ctx = canvas.getContext('2d');
//    ctx.fillRect(10, 50, 100, 200);
//}

//function drawSomething() {
//    var canvas = document.getElementById('myCanvas')
//    , ctx = canvas.getContext('2d')
//    , offset = 15
//    , clearOffset = 30
//    , pushDownOffset = 10
//    , height = 50
//    , width = 100
//    , count = 4
//    , i = 0;
//    for (i = 0; i < count; i++) {
//        ctx.fillRect(i * (offset + width) + offset, offset, width, height);
//        ctx.clearRect(i * (offset + width) + (clearOffset / 2) + offset,
//        offset + (clearOffset / 2) + pushDownOffset,
//        width - clearOffset, height - clearOffset)
//        ctx.strokeRect(i * (offset + width) + offset,
//        (2 * offset) + height, width, height);
//    }
//}

function drawUsingCssColor(xsetAdd, color1, color2) {
    var xset = xsetAdd;
    var x = color1;
    var y = color2;
    var canvas = document.getElementById('myCanvas')
    , ctx = canvas.getContext('2d')
    , offset = .5
    , size = 45;
    ctx.fillStyle = x;
    ctx.fillRect(offset + (0 * (offset + size)), offset + xset, size, size);
    ctx.fillStyle = y;
    ctx.fillRect(offset + (1 * (offset + size)), offset + xset, size, size);
    ctx.fillStyle = x;
    ctx.fillRect(offset + (2 * (offset + size)), offset + xset, size, size);
    ctx.fillStyle = y;
    ctx.fillRect(offset + (3 * (offset + size)), offset + xset, size, size);
    ctx.fillStyle = x;
    ctx.fillRect(offset + (4 * (offset + size)), offset + xset, size, size);
    ctx.fillStyle = y;
    ctx.fillRect(offset + (5 * (offset + size)), offset + xset, size, size);
    ctx.fillStyle = x;
    ctx.fillRect(offset + (6 * (offset + size)), offset + xset, size, size);
    ctx.fillStyle = y;
    ctx.fillRect(offset + (7 * (offset + size)), offset + xset, size, size);

}