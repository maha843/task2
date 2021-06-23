<?php
require("takeinput.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
body{
background-image: url("d1.jpg");
}
.btn {
  border: none;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}
.info {
  color: dodgerblue;
}

.info:hover {
  background: #2196F3;
  color: white;
}

</style>
</head>
<body onload="startmove()">


<script>

var mymovePiece;



function component(width, height, x, y) {
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;
    this.x = x;
    this.y = y;    

    }
    this.newPos = function() {
        this.x += this.speedX;
        this.y += this.speedY;        
    }    
}



function moveup() {
    mymovePiece.speedY -= 1; 
    
   
}

function movedown() {
    mymovePiece.speedY += 1; 
  
}

function moveleft() {
    mymovePiece.speedX -= 1; 
  
}

function moveright() {
    mymovePiece.speedX += 1; 
   
}
function stop() {
    mymovePiece.speedX = 0; 
   
}

</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div style="text-align: center;">
<form  action="takeinput.php" method="post">

  <button class="btn info" type="submit" value="up" name="uu" onclick="moveup()">UP</button><br><br>
  <button class="btn info" type="submit" value="left" name="uu" onclick="moveleft()">LEFT</button>
  <button class="btn info" type="submit" value="right" name="uu" onclick="moveright()">RIGHT</button><br><br>
  <button class="btn info" type="submit" value="down" name="uu" onclick="movedown()">DOWN</button>
   

<div><button class="btn info" type="submit" value="stop"name="uu" onclick="stop()">stop</button></div>
</form>
</div>

</body>
</html>

