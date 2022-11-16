<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome Screen</title>
  <link rel="stylesheet" href="css/orb.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/modal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/glitch.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script><link rel="stylesheet" href="css/weather.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
  var second = {!! json_encode($background->second, JSON_HEX_TAG) !!};
	$(document).ready(function(){
    setInterval(() => {
      fetch('/isDirty').then(res => res.json()).then(data => { //dirty
        if(data.dirty){
          fetch('/unDirty').then(res => res.data).then(location.reload()); //undirty
        }
      })
    }, 1000);
  setTimeout(() => {
    document.body.classList.add('active')
      setTimeout(() => {
        document.body.classList.remove('active')
    }, second);
    }, 2000);
  });
</script>
<style>
  body {
  background-image: url('{{$background->background}}');
  /* https://sample-videos.com/video123/mp4/720/big_buck_bunny_720p_1mb.mp4
  https://images.wallpaperscraft.com/image/autumn_forest_park_128379_1920x1080.jpg
   */
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 5;
  background-image: linear-gradient(to right, #ffc3a0 0%, #ffafbd 100%);
}
img{
  border-radius: 50%;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<canvas id="canvas"></canvas>
<div class="copy">
  <h1 class="glitch" data-text="
    Hi">Hi</h1>
    
</div>


<!-- weather -->
<div class="size">
<div class="container">
  <div class="weather-side">
    <div class="weather-gradient"></div>
    <div class="date-container">
      <h2 class="date-dayname">Tuesday</h2><span class="date-day">15 Jan 2019</span><i class="location-icon" data-feather="map-pin"></i><span class="location">Paris, FR</span>
    </div>
    <div class="weather-container"><i class="weather-icon" data-feather="storm"></i>
      <h1 class="weather-temp">29°C</h1>
      <h3 class="weather-desc">Sunny</h3>
    </div>
</div>
</div>

<!-- modal -->

<div class="wrapper">
<div class="popup">
<div class="popup-inside">
<div class="backgrounds">
<div class="background1"></div>
<div class="background1 background2"></div>
<div class="background1 background3"></div>
<div class="background1 background4"></div>
<div class="background1 background5"></div>
<div class="background1 background6"></div>
</div>
</div>
<div class="content">
<div class="content-wrapper">
<h3>Welcome {{$first->name}} to INVP </h1>
<h3>{{$first->name}}</h2>
<img src="{{asset($first->profile)}}" width="100" height="100">
<h3>Department: {{$first->department}}</h2>
<h3>{{$first->show_message}}</h2>
</div>
</div>
</div>
</div>
</div>
<!-- partial -->
  <script  src="js/orb.js"></script>
  <script  src="js/weather.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js'></script>

</body>
</html>