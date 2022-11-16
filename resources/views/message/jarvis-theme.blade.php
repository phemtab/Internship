<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome Screen</title>
  <link rel="stylesheet" href="css/jarvis-theme.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<style>
 .bg{
  background-image: url('image/scifi.jpg');
  /* https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_1mb.mp4
  https://images.wallpaperscraft.com/image/autumn_forest_park_128379_1920x1080.jpg
   */
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 }
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<!-- Left Menu -->
<div id="leftmenu">
  
  <div id="date_time">
    <div id="date" class="semi_arc e4">
      <div class="semi_arc_2 e4_1">
        <div class="counterspin4"></div>
      </div>
        <div style="font-size: 40px; margin-top: 25px;">04</div>
        <div style="font-size: 25px;">January</div>
    </div>
    
    <div id="time" class="arc e1">
        <div style="font-size: 23px; margin-left: -10px; margin-top: 23px;">23:41</div>
        <div style="font-size: 17px; margin-top: 10px;">Tuesday</div>
    </div>
  </div>
  
  <p class="title">Weather</p>
  <div class="hline title_underline"></div>
  
  <span class="menuitem entypo-chart-area" style="font-size: 30px; margin-left: 10px;">
    <p id="ram" class="caption" style="font-size: 20px;">Storm</p>
  </span> <br/>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <p class="title">Social</p>
  <div class="hline title_underline"></div>
  
  <div class="app_icon entypo-facebook-squared"></div>
  <div class="app_icon entypo-twitter"></div>
  <div class="app_icon entypo-gplus"></div>
  <div class="app_icon entypo-skype"></div>
  
  <div class="app_icon entypo-tumblr"></div>
  <div class="app_icon entypo-pinterest"></div>
  <div class="app_icon entypo-soundcloud"></div>
  <div class="app_icon entypo-stumbleupon"></div>
  
</div>


<!-- Right Menu -->
<div id="rightmenu">
  <p class="title" style="text-align: left; margin-left: 10px;">Today News</p>
  <div id="particle10" class="hline"></div>
  <div id="particle11" class="hline"></div>
  <div id="particle12" class="vline"></div>
  <textarea id="note_input" rows="12" cols="44">A new software update for Tesla cars appears to include monitoring of drivers through the car's internal cameras when Autopilot is in use.
    
  The "self-driving" feature requires drivers to pay attention at all times, but has been criticised as easy to fool.
Users have been able to activate the assist feature and leave the driver's seat, and video themselves doing so.
But the new feature will detect how attentive the driver actually is.
Tesla's cars have relied on sensors in the wheel to make sure the driver's hands remain on it.</textarea>
</div>



<!-- Arc Reactor -->
<div id="arc_container">
  <div class="arc_reactor">
    <div class="case_container">
      <div class="e7">
        <div class="semi_arc_3 e5_1">
          <div class="semi_arc_3 e5_2">
            <div class="semi_arc_3 e5_3">
              <div class="semi_arc_3 e5_4"></div>
            </div>
          </div>
        </div>
        <div class="core2"></div>
      </div>
      <ul class="marks">
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
        <li></li><li></li><li></li><li></li><li></li><li></li>
      </ul>
    </div>
  </div>
</div>



<!-- Particles -->
<!-- Left Menu Particles -->
<canvas id="particle1" width="20" height="500"></canvas> <script>
var canvas = document.getElementById('particle1');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(0, 0);
context.lineTo(0, 70);
context.lineTo(10, 85);
context.lineTo(10, 135);
context.lineTo(0, 150);
context.lineTo(0, 480);
context.lineTo(5, 490);
context.lineTo(10, 490);
context.lineTo(20, 490);
context.lineTo(20, 250);
context.lineTo(10, 235);
context.lineTo(10, 185);
context.lineTo(20, 170);
context.lineTo(20, 40);
context.lineTo(10, 30);
context.lineTo(10, 20);

context.closePath();
context.lineWidth = 1;
context.fillStyle = 'rgba(2,254,255,0.3)';
context.fill();
context.strokeStyle = 'transparent';
context.stroke();
</script>

<canvas id="particle1_1" width="40" height="510"></canvas> <script>
var canvas = document.getElementById('particle1_1');
var context = canvas.getContext('2d');

context.beginPath();
context.lineTo(0, 0);
context.lineTo(10, 15);
context.lineTo(10, 65);
context.lineTo(0, 80);
context.lineTo(0, 0);

context.closePath();
context.lineWidth = 1;
context.fillStyle = 'rgba(2,254,255,0.3)';
context.fill();
context.strokeStyle = 'transparent';
context.stroke();
</script>

<canvas id="particle1_2" width="40" height="510"></canvas> <script>
var canvas = document.getElementById('particle1_2');
var context = canvas.getContext('2d');

context.beginPath();
context.lineTo(10, 80);
context.lineTo(0, 65);
context.lineTo(0, 15);
context.lineTo(10, 0);
context.lineTo(10, 80);

context.closePath();
context.lineWidth = 1;
context.fillStyle = 'rgba(2,254,255,0.3)';
context.fill();
context.strokeStyle = 'transparent';
context.stroke();
</script>

<div id="particle1_3">
  > > > >
</div>
<div class="bg"></div>

<div id="particle2">▶<br/>▶<br/>▶</div>
<div id="particle3" class="vline"/>
<div id="particle4" class="vline"/>
<div id="particle5" class="vline"/>
<div id="particle6" class="vline"/>
<div id="particle7" class="vline"/>
<div id="particle8" class="vline"/>
<div id="particle9" class="vline"/>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
