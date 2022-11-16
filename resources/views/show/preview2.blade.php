<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSS 2 file นะครับ -->
    <link rel="stylesheet" href="{{asset('public/css/previewpage2.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/loading.css')}}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <title>Preview2</title>
    <script>    
    </script>
</head>
<body>
    <div class="bg">
        <h1 style="top: 5vh;position: relative;"><span class="aquamarine" >FACE</span> CONNECT </h1>
        <img id="box" src="https://dev.invp.co.th/intern/image/Main box.png" alt="" style="position: relative;left: 37vw;top: 20vh;width: 44vw;">
        <img id="line" src="https://dev.invp.co.th/intern/image/Line for name.png" alt="" style="position: relative;left: -10vw;top: 5vh;z-index: 1;width: 42vw;">
        <img id="profile" src="https://dev.invp.co.th/intern/public/file/profile/white version.png" alt="" style="border-radius: 50%;position: absolute;right: 64vw;top: 47vh;width: 90px;height: 90px;">
        <h3 id="name" style="font-size: 5vh;position: absolute;top: 45vh;left: 38vw;">Firstname Lastname</h3>
        <h3 id="texttop" style="font-size: 4vh;position: absolute;top: 33vh;left: 62vw;">Top Message</h3>
        <h3 id="textbot" style="position: absolute;top: 59vh;left: 38vw;width: 50px; height:50px;">Bottom Message</h3>
    </div>
    <div>
        <div class="loader-left" style="width: 112px !important;height: 100px !important">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="loader-right" style="width: 112px !important;height: 100px !important">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/easing/EasePack.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/EaselPlugin.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/TextPlugin.min.js'></script>
<!-- JS 1 File นะครับ -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js'></script><script  src="{{asset('public/js/previewpage2.js')}}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>