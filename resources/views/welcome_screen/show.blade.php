<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="icon" href="{{asset('file/black version.png')}}" type="image/icon type">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="{{asset('public/css/page1.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>
<!-- partial:index.partial.html -->
<div id="starfield"></div>
<div id="app">
    <div class='gui'>
        <div class="ui-border-v2 t">
            <svg viewBox="0 0 620 30">
                <path d="M628.587,25.19l-7.963-13.811h-0.008L617.525,6.03A12.244,12.244,0,0,0,607.74.994H409.994V0h198.43c4.149,0,8.2,2.1,9.748,4.781l2.949,5.089h0.028l8.086,14.062A12.237,12.237,0,0,0,639.03,29h80.976v0.006h77.735a12.243,12.243,0,0,0,9.784-5.037l3.091-5.348h0.008l7.963-13.811C820.142,2.113,824.192,0,828.345,0H1029.99V1H829.029a12.237,12.237,0,0,0-9.794,5.068L811.15,20.131h-0.029l-2.948,5.089C806.618,27.9,802.573,30,798.424,30H638.345C634.192,30,630.142,27.887,628.587,25.19Z" transform="translate(-410)"></path>
            </svg>
            <div class="batt"></div>
        </div>
        <div class='ui-c-border' v-for='n in ["t", "b"]' :class='n' :key='n + Math.random() + "border"'>
            <svg viewBox="0 0 620 30">
                <path d="M628.587,25.19l-7.963-13.811h-0.008L617.525,6.03A12.244,12.244,0,0,0,607.74.994H409.994V0h198.43c4.149,0,8.2,2.1,9.748,4.781l2.949,5.089h0.028l8.086,14.062A12.237,12.237,0,0,0,639.03,29h80.976v0.006h77.735a12.243,12.243,0,0,0,9.784-5.037l3.091-5.348h0.008l7.963-13.811C820.142,2.113,824.192,0,828.345,0H1029.99V1H829.029a12.237,12.237,0,0,0-9.794,5.068L811.15,20.131h-0.029l-2.948,5.089C806.618,27.9,802.573,30,798.424,30H638.345C634.192,30,630.142,27.887,628.587,25.19Z" transform="translate(-410)"></path>
            </svg>
            <span class='batt'></span>
        </div>
        <div class='ui-border' v-for='n in ["l","r"]' :class='n' :key='"UIBorder" + n'>
            <i class='cap t'></i>
            <i class='batt'></i>
            <i class='cap b'></i>
        </div>
        <div class='ui-cross'>
            <div class='border-x f'></div>
            <div class='border-x l'></div>
            <div class='border-horz'></div>
            <div class='border-vert'>
                <div class='dot' v-for='n in ["t", "b"]' :class='n' :key='n + Math.random() + "dot"'>
                    <div class='x-hair'>
                        <div class='line' v-for='n in 4' :key='n * Math.random() + "line"'></div>
                    </div>
                </div>
            </div>
        </div>
        <div class='ui-circles' v-for='n in ["l","r"]' :class='n' :key='"UICircles" + n'>
            <div class='circle' v-for='n in 6' :key='n * Math.random() + "circle"'></div>
        </div>
        <div class="ui-text r">
            <h3></h3>
            <div class="t-o">
                
            </div>
        </div>
        <div class="ui-text l">
            <h3><p> <span id="datetime"></span></p></h3>
            <div class="t-o">
                
            </div>
        </div>
    </div>
    <section id='header' ref='header'>
        <div class='wrap'>
            <div class='ui-inner-border' v-for='n in ["t","b"]' :class='n' :key='"UIInnerBorder" + n'>
                <button v-if='n === "b"' style="display: none;">
                    <span class='border'>
                    <svg viewBox='0 0 16 16' class='icon-arrow'>
                        <path d='M8,12c-0.232,0-0.463-0.08-0.651-0.241l-7.759-6.65L0.892,3.59L8,9.683l7.108-6.093l1.302,1.519l-7.759,6.65 C8.463,11.92,8.232,12,8,12z'></path>
                    </svg>
                </button>
            </div>
            <div class='ui-tics' v-for='n in ["t","b"]' :class='n' :key='"UITics" + n'>
                <i class='tic' v-for='n in 50' :key='n * Math.random() + "tic"'></i>
            </div>
            <div class='ui-grid'>
                <div class='ui-box'>
                   
                    <div>
                        <img class="profile" src="{{$users[0]->img}}" alt="">
                        <h1 class='title' slot='content'><span>{{$users[0]->name}} <em>{{$users[0]->surname}}</span></em></h1>
                        <h1 class="toptext">{{$users[0]->text1}}</h1>
                        <h1 class="bottext">{{$users[0]->text2}}</h1>
                    </div>
                    
                    <div class='ui-fx'>
                        <div class='ui-inner-border l'></div>
                        <div class='ui-inner-border r'></div>
                        <span class='ui-corner' v-for='n in 4' :key='n * Math.random()'></span>
                        <div class='ui-batts' :class='batt' v-for='batt in ["l", "r", "t", "b"]' :key='batt + Math.random()'>
                            <span class='batt' v-for='n in 2' :key='n * Math.random()'></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- partial -->
<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/easing/EasePack.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/EaselPlugin.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/TextPlugin.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js'></script><script  src="{{asset('public/js/page1.js')}}"></script>

</body>
</html>
