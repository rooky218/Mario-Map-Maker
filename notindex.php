<DOCTYPE html>
<head>
<title>Office Hours</title>
</head>
<body>

  <!-- DO NOT DELETE THESE!! In order to load on canvas, image must be loaded in html -->
  <img id="mario1" width="30" height="30" src="Mario/mario1.png" alt="ground">
  <img id="mario2" width="30" height="30" src="Mario/mario2.png" alt="empty">
  <img id="mario3" width="30" height="30" src="Mario/mario3.png" alt="full">
  <img id="mario4" width="30" height="30" src="Mario/mario4.png" alt="brick">
  <img id="mario5" width="30" height="30" src="Mario/mario5.png" alt="block">
  <img id="pipe1" width="30" height="30" src="Mario/pipe1.jpg" alt="pipe top">
  <img id="pipe2" width="30" height="30" src="Mario/pipe2.jpg" alt="pipe middle">
  <img id="pipe3" width="30" height="30" src="Mario/pipe3.jpg" alt="pipe bottom">

  <div style="overflow: scroll; width: 1000px; height: 600px; border: solid red 3px; margin-left: auto; margin-right: auto;">
  <canvas id="gameCanvas" width="10000px" height="600px" style="margin-left: auto; margin-right: auto;"></canvas>
  </div>

</body>
</html>

<script>
var canvas;
var canvasContext;
const BLOCK_HEIGHT = 45;
const BLOCK_WIDTH = 45;



window.onload = function() {
    canvas = document.getElementById('gameCanvas');
    canvasContext = canvas.getContext('2d');
    var img = document.getElementById("mario1");


    canvasContext.drawImage(img, 10, 10, 30, 30);
    drawEverything();

    //var c = document.getElementById("myCanvas");
    //var ctx = c.getContext("2d");



}

function drawEverything(){
  //canvas color/grid color
  colorRect(0, 0, canvas.width, canvas.height, '#699DF4');

  var ground = "#9b786f";
  var sky = "#2a73f0";
  var grass = "#17a917";
  var groundBlock = "mario1";
  var emptyBlock = "mario2";
  var fullBlock = "mario3";
  var brick = "mario4";
  var block = "mario5";

  var zero = 3; //ground level to build on
  var lv1 = 6;
  var lv2 = 10;

  //draw background/sky
  //bigBlock(0, 0, sky, 133, 21);
  bigBlock(0, 0, groundBlock, 70, 3);
  bigBlock(72, 0, groundBlock, 15, 3);
  bigBlock(90, 0, groundBlock, 64, 3);
  bigBlock(156, 0, groundBlock, 55, 3);

  //draw elements
  bigBlock(17, lv1, fullBlock);
  bigBlock(21, lv1, brick, 5);
  bigBlock(22, lv1, fullBlock);
  bigBlock(24, lv1, fullBlock);
  bigBlock(23, lv2, fullBlock);

  pipe(29, zero);
  pipe(39, zero, 2);
  pipe(47, zero, 3);
  pipe(58, zero, 3);

  bigBlock(66, 7, fullBlock);
  bigBlock(78, lv1, brick, 3);
  bigBlock(81, lv2, brick, 8);
  bigBlock(92, lv2, brick, 3);
  bigBlock(95, lv2, fullBlock);
  bigBlock(95, lv1, brick);
  bigBlock(101, lv1, brick, 2);
  bigBlock(107, lv1, fullBlock);
  bigBlock(110, lv1, fullBlock);
  bigBlock(110, lv2, fullBlock);
  bigBlock(113, lv1, fullBlock);
  bigBlock(119, lv1, brick);
  bigBlock(122, lv2, brick, 3);
  bigBlock(129, lv2, brick);
  bigBlock(130, lv2, fullBlock, 2);
  bigBlock(130, lv1, brick, 2);
  bigBlock(132, lv2, brick);

  steps1(135, zero, block, 4);
  steps2(141, zero, block, 4);

  steps1(149, zero, block, 4);
  bigBlock(153, zero, block, 1, 4);
  steps2(156, zero, block, 4);

  pipe(164, zero);

  bigBlock(169, lv1, brick, 2);
  bigBlock(171, lv1, fullBlock);
  bigBlock(172, lv1, brick);

  pipe(180, zero);
  steps1(182, zero, block, 8);
  bigBlock(190, zero, block, 1, 8);
  bigBlock(199, zero, block);

  bigBlock(203, zero, brick, 5, 3);
  bigBlock(204, zero, brick, 3, 5);








  //steps1(30, zero, block, 4);
  //steps2(40, zero, block, 4);



  //steps1(0, 10, "green", 5);
  //steps2(6, 10, "green", 5);
  //steps3(12, 14, "green", 5);
  //steps4(18, 14, "green", 5);

  //bigBlock(20, 14, "hotpink", 5, 1);
  //bigBlock(21, 13, "hotpink", 4, 1);
  //bigBlock(22, 12, "hotpink", 3, 1);
  //bigBlock(23, 11, "hotpink", 2, 1);
  //bigBlock(24, 10, "hotpink", 1, 1);





}//end big function

function steps4(xin, yin, colorIn, size){
  //xin = x-axis
  //yin = y-axis
  //size = how many steps

  for(var i = size; i > 0; i--){
      bigBlock(xin, yin, colorIn, i, 1);
      xin++;
      yin--;
  }
}

function steps1(xin, yin, colorIn, size){
  //xin = x-axis
  //yin = y-axis
  //size = how many steps

  for(var i = 1; i <= size; i++){
      bigBlock(xin, yin, colorIn, 1, i);
      xin++;
  }
}

function steps2(xin, yin, colorIn, size){
  //xin = x-axis
  //yin = y-axis
  //size = how many steps

  for(var i = size; i > 0; i--){
      bigBlock(xin, yin, colorIn, 1, i);
      xin++;
  }
}

function steps3(xin, yin, colorIn, size){
  //xin = x-axis
  //yin = y-axis
  //size = how many steps

  for(var i = size; i > 0; i--){
      bigBlock(xin, yin, colorIn, i, 1);
      yin--;
  }
}

function steps4(xin, yin, colorIn, size){
  //xin = x-axis
  //yin = y-axis
  //size = how many steps

  for(var i = size; i > 0; i--){
      bigBlock(xin, yin, colorIn, i, 1);
      xin++;
      yin--;
  }
}

function bigBlock(xin, yin, colorIn, sizeXin = 1, sizeYin = 1){
  //xin = x-axis
  //yin = y-axis
  //size = how many steps
  sizeX = xin + sizeXin;
  sizeY = yin + sizeYin;

  for(var i = xin; i < sizeX; i++){
    for(var z = yin; z < sizeY; z++){
      stackBlock(i, z, colorIn);
    }
  }
}

function pipe(xin, yin, tall = 1, hide = false){
  //xin = x axis location
  //yin = y axis location
  //colorIn = block color
  //hide = show or hide, default is to show -- true = hide

  var pipe_width = 90;
  var pipe_height = 45;

  var img1 = document.getElementById("pipe1");
  var img2 = document.getElementById("pipe2");
  var img3 = document.getElementById("pipe3");

  var sum = (pipe_height * yin);// + yin;
  var sum2 = (pipe_height * xin);// + xin;
  var b_height = canvas.height - sum;
  var b_long = sum2;

  var p1 = b_height - (tall * pipe_height);
  var p2 = p1 + 45;

  console.log("b_height: " + b_height);

  if(hide == false){
    //colorRect(b_long, b_height, BLOCK_WIDTH, BLOCK_HEIGHT, colorIn);
    canvasContext.drawImage(img1, b_long, p1, pipe_width, pipe_height);
    if(tall != 1){
      for(var i = 0; i < tall; i++){
        canvasContext.drawImage(img3, (b_long + 5), b_height - (45 * i), (pipe_width - 10), pipe_height);
      }
    }
    canvasContext.drawImage(img2, (b_long + 5), p2, (pipe_width - 10), pipe_height);

  }
}

function stackBlock(xin, yin, imgIn, hide = false){
  //xin = x axis location
  //yin = y axis location
  //colorIn = block color
  //hide = show or hide, default is to show -- true = hide

  var img = document.getElementById(imgIn);
  console.log("Image in: " + imgIn);

  var sum = (BLOCK_HEIGHT * yin);// + yin;
  var sum2 = (BLOCK_WIDTH * xin);// + xin;
  var b_height = canvas.height - sum;
  var b_long = sum2;

  if(hide == false){
    //colorRect(b_long, b_height, BLOCK_WIDTH, BLOCK_HEIGHT, colorIn);
    canvasContext.drawImage(img, b_long, b_height, BLOCK_WIDTH, BLOCK_HEIGHT);

  }
}

function colorRect(leftX, topY, width, height, drawColor) {
    canvasContext.fillStyle = drawColor;
    canvasContext.fillRect(leftX, topY, width, height);
}

</script>
