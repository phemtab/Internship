<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS 2 File นะครับ -->
    <link rel="stylesheet" href="{{asset('public/css/previewpage2.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/loading.css')}}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <title>{{$screen->name}}</title>
    <script>
        $(document).ready(function(){
        setInterval(() => {
            fetch('/intern/isDirty/{{$uuid}}').then(res => res.json()).then(data => { //dirty
            if(data.dirty){
              fetch('/intern/unDirty/{{$uuid}}').then(res => res.data).then(location.reload()); //undirty
            }
          })
        }, 1000);
      });
    
    </script>
</head>
<body>
    <div class="bg">
        <h1><span class="aquamarine" >FACE</span> CONNECT </h1>
        <img id="box" src="https://dev.invp.co.th/intern/image/Main box.png" alt="">
        <img id="line" src="https://dev.invp.co.th/intern/image/Line for name.png" alt="">
        @if(($usertype->usertype) == 1)
        <img id="profile" src="{{asset($people->profile)}}" alt="">
        <span id="name">{{$people->firstname}} {{$people->lastname}}</span>
        @else
        <img id="profile" src="{{asset($visitor->profile)}}" alt="">
        <span id="name">{{$visitor->firstname}} {{$visitor->lastname}}</span>
        @endif
        <span id="texttop">{{$screen->message_top}}</span>
        <span id="textbot">{{$screen->message_bot}}</span>
    </div>
    <div>
        <div class="loader-left">
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
        <div class="loader-right">
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