<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$screen->name}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
      @media (min-width:10px) and (max-width: 599px) {
        .container-fluid{
            max-width:120px;
            min-height:450px;
            max-height:450px;
            font-size:1px;
            
            
        }

        img{
            max-width: 50%;
            min-width: 50%;
            min-height:70%;
            max-height:70%;
            margin-left:60px;
        }
    }

    @media (min-width:740px) and (max-width: 1200px) {
        .container-fluid{
            
            min-width: 500px;
            max-width:500px;
            min-height:250px;
            max-height:250px;
            font-size:1px;
            
            
        }

        img{
            max-width: 25%;
            min-width: 25%;
            max-height: 50%;
            min-height: 50%;
            
        }
    }



    @media (min-width:600px) and (max-width: 740px) {
        .container-fluid{
            
            min-width: 400px;
            max-width:400px;
            min-height:250px;
            max-height:250px;
            font-size:1px;
            
        }

        img{
            max-width: 30%;
            min-width: 30%;
            
        }
    }
      
        body{
            background-image: url('https://www.img.in.th/images/d5f777063774b76b1ca1fa62eb166ef1.jpg');
            background-repeat: no-repeat;  
            
            min-width: 100%;
            min-height: 100%;
            background-size:auto;
            
        }


.text {
  text-align: center;
  color:#579679;
  font-size: 70px;
  font-weight : bold;
  letter-spacing: -1px; 
  line-height: 1;
  font-family: 'Helvetica Neue', sans-serif;  
  text-transform: uppercase;
  margin-top :30px;
}

.info{
    width:300px;
    height:100%;
}

.animated {
  animation-duration: 2.5s;
  animation-fill-mode: both;
  animation-iteration-count: infinite;
}



@keyframes pulse {
  0% {transform: scale(1);}
  50% {transform: scale(1.1);}
  100% {transform: scale(1);}
}
.pulse {
  animation-name: pulse;
  animation-duration: 4s;
}



@import url('https://fonts.googleapis.com/css?family=Corben:700');

h1 {
	font-family: 'Corben', cursive;
	font-size: 6rem;
	color: white;
	letter-spacing: 0.1rem;
	text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.66);
}


.snow {
	position: absolute;
	min-width: 100vw;
	min-height: 100vh;
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
}

.snow .svg {
	position: absolute;
	width: 100%;
	height: 100%;
}

#snow-top-layer {
	will-change: transform;
	transform: translateY(-768px);
	animation: fall 22.5s infinite linear;
}

#snow-bottom-layer {
	will-change: transform;
	transform: translateY(-768px);
	animation: fall 45s infinite linear;
}

@keyframes fall {
	
	100% {
		transform: translateY(0);
	}
	
}



.container-fluid{
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  width:500px;
  height:280px;
  margin-left:45px;
  color: #FFFFFF;
  font-family: 'Roboto', sans-serif;
  font-size: 32px;
  padding: 5px 10px;
  text-align: center;

  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #114666; -webkit-box-shadow: 0 0 3px #114666; }
  50% { background-color: #64bef5; -webkit-box-shadow: 0 0 40px #64bef5; }
  100% { background-color: #114666; -webkit-box-shadow: 0 0 3px #114666; }
}

@-moz-keyframes glowing {
  0% { background-color: #114666; -moz-box-shadow: 0 0 3px #114666; }
  50% { background-color: #64bef5; -moz-box-shadow: 0 0 40px #64bef5; }
  100% { background-color: #114666; -moz-box-shadow: 0 0 3px #114666; }
}

@-o-keyframes glowing {
  0% { background-color: #114666; box-shadow: 0 0 3px #114666; }
  50% { background-color: #64bef5; box-shadow: 0 0 40px #64bef5; }
  100% { background-color: #114666; box-shadow: 0 0 3px #114666; }
}

@keyframes glowing {
  0% { background-color: #114666; box-shadow: 0 0 3px #114666; }
  50% { background-color: #64bef5; box-shadow: 0 0 40px #64bef5; }
  100% { background-color: #114666; box-shadow: 0 0 3px #114666; }
}


.deconstructed {
  position: relative;
  margin-top:20px;
  color: transparent;
  font-family: 'Roboto', sans-serif;
  font-size: 50px;
  font-weight: bold;
  letter-spacing: -0.02em;
  line-height: 1.03em;
  text-align: center;
  border:solid 1px black;
  background-color: rgb(0, 35, 75);
  width:auto;
  height:auto;

}

.deconstructed > div {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  color: wheat;
  pointer-events: none;
}

.deconstructed > div:nth-child(1) {
  -webkit-mask-image: linear-gradient(black 25%, transparent 25%);
  mask-image: linear-gradient(black 25%, transparent 25%);
  animation: deconstructed1 5s infinite;
}

.deconstructed > div:nth-child(2) {
  -webkit-mask-image: linear-gradient(transparent 25%, black 25%, black 50%, transparent 50%);
  mask-image: linear-gradient(transparent 25%, black 25%, black 50%, transparent 50%);
  animation: deconstructed2 5s infinite;
}

.deconstructed > div:nth-child(3) {
   -webkit-mask-image: linear-gradient(transparent 50%, black 50%, black 75%, transparent 75%);
  mask-image: linear-gradient(transparent 50%, black 50%, black 75%, transparent 75%);
  animation: deconstructed3 5s infinite;
}

.deconstructed > div:nth-child(4) {
   -webkit-mask-image: linear-gradient(transparent 75%, black 75%);
  mask-image: linear-gradient(transparent 75%, black 75%);
  animation: deconstructed4 5s infinite;
}

@keyframes deconstructed1 {
  0% {
    transform: translateX(100%);
  }
  26% {
    transform: translateX(0%);
  }
  83% {
    transform: translateX(-0.1%);
  }
  100% {
    transform: translateX(-120%);
  }
}

@keyframes deconstructed2 {
  0% {
    transform: translateX(100%);
  }
  24% {
    transform: translateX(0.5%);
  }
  82% {
    transform: translateX(-0.2%);
  }
  100% {
    transform: translateX(-125%);
  }
}

@keyframes deconstructed3 {
  0% {
    transform: translateX(100%);
  }
  22% {
    transform: translateX(0%);
  }
  81% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-130%);
  }
}

@keyframes deconstructed4 {
  0% {
    transform: translateX(100%);
  }
  20% {
    transform: translateX(0%);
  }
  80% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-135%);
  }
}




    </style>
</head>

    <!-- <div class="text animated pulse">Face <span style="color:#999196;">Connect</span></div> -->
    
    <div class="deconstructed">
        DECONSTRUCTED
        <div>{{$screen}}}</div>
        <div>{{$screen->message_top}}</div>
        <div>{{$screen->message_top}}</div>
        <div>{{$screen->message_top}}</div>
      </div>
   
   
    
    <center>
        <div class="container">
            <div>
            @if(($usertype->usertype) == 1)
        <br><br><br><br><br><br><img src="{{asset($people->profile)}}" style="display: inline-block;width:200px;height:200px;">
        @else
        <br><br><br><br><br><br><img src="{{asset($visitor->profile)}}" style="display: inline-block;width:200px;height:200px;">
        @endif
            </div>
        </div>
          
    <div class='info' style="display: inline;">
    <div class="container-fluid"><br>@if(($usertype->usertype) == 1)
    {{$people->firstname}} {{$people->lastname}}
    @else
    {{$visitor->firstname}} {{$visitor->lastname}}

    @endif
    
    <br>{{$screen->message_bot}}<br></Location> </div>
    </div>   

        <div class="snow">
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1536" preserveAspectRatio="xMidYMax slice">
                <g fill="#FFF" fill-opacity=".15" transform="translate(55 42)">
                   <g id="snow-bottom-layer">
                      <ellipse cx="6" cy="1009.5" rx="6" ry="5.5"/>
                      <ellipse cx="138" cy="1110.5" rx="6" ry="5.5"/>
                      <ellipse cx="398" cy="1055.5" rx="6" ry="5.5"/>
                      <ellipse cx="719" cy="1284.5" rx="6" ry="5.5"/>
                      <ellipse cx="760" cy="1155.5" rx="6" ry="5.5"/>
                      <ellipse cx="635" cy="1459.5" rx="6" ry="5.5"/>
                      <ellipse cx="478" cy="1335.5" rx="6" ry="5.5"/>
                      <ellipse cx="322" cy="1414.5" rx="6" ry="5.5"/>
                      <ellipse cx="247" cy="1234.5" rx="6" ry="5.5"/>
                      <ellipse cx="154" cy="1425.5" rx="6" ry="5.5"/>
                      <ellipse cx="731" cy="773.5" rx="6" ry="5.5"/>
                      <ellipse cx="599" cy="874.5" rx="6" ry="5.5"/>
                      <ellipse cx="339" cy="819.5" rx="6" ry="5.5"/>
                      <ellipse cx="239" cy="1004.5" rx="6" ry="5.5"/>
                      <ellipse cx="113" cy="863.5" rx="6" ry="5.5"/>
                      <ellipse cx="102" cy="1223.5" rx="6" ry="5.5"/>
                      <ellipse cx="395" cy="1155.5" rx="6" ry="5.5"/>
                      <ellipse cx="826" cy="943.5" rx="6" ry="5.5"/>
                      <ellipse cx="626" cy="1054.5" rx="6" ry="5.5"/>
                      <ellipse cx="887" cy="1366.5" rx="6" ry="5.5"/>
                      <ellipse cx="6" cy="241.5" rx="6" ry="5.5"/>
                      <ellipse cx="138" cy="342.5" rx="6" ry="5.5"/>
                      <ellipse cx="398" cy="287.5" rx="6" ry="5.5"/>
                      <ellipse cx="719" cy="516.5" rx="6" ry="5.5"/>
                      <ellipse cx="760" cy="387.5" rx="6" ry="5.5"/>
                      <ellipse cx="635" cy="691.5" rx="6" ry="5.5"/>
                      <ellipse cx="478" cy="567.5" rx="6" ry="5.5"/>
                      <ellipse cx="322" cy="646.5" rx="6" ry="5.5"/>
                      <ellipse cx="247" cy="466.5" rx="6" ry="5.5"/>
                      <ellipse cx="154" cy="657.5" rx="6" ry="5.5"/>
                      <ellipse cx="731" cy="5.5" rx="6" ry="5.5"/>
                      <ellipse cx="599" cy="106.5" rx="6" ry="5.5"/>
                      <ellipse cx="339" cy="51.5" rx="6" ry="5.5"/>
                      <ellipse cx="239" cy="236.5" rx="6" ry="5.5"/>
                      <ellipse cx="113" cy="95.5" rx="6" ry="5.5"/>
                      <ellipse cx="102" cy="455.5" rx="6" ry="5.5"/>
                      <ellipse cx="395" cy="387.5" rx="6" ry="5.5"/>
                      <ellipse cx="826" cy="175.5" rx="6" ry="5.5"/>
                      <ellipse cx="626" cy="286.5" rx="6" ry="5.5"/>
                      <ellipse cx="887" cy="598.5" rx="6" ry="5.5"/>
                   </g>
                </g>
                <g fill="#FFF" fill-opacity=".3" transform="translate(65 63)">
                   <g id="snow-top-layer">
                      <circle cx="8" cy="776" r="8"/>
                      <circle cx="189" cy="925" r="8"/>
                      <circle cx="548" cy="844" r="8"/>
                      <circle cx="685" cy="1115" r="8"/>
                      <circle cx="858" cy="909" r="8"/>
                      <circle cx="874" cy="1438" r="8" transform="rotate(180 874 1438)"/>
                      <circle cx="657" cy="1256" r="8" transform="rotate(180 657 1256)"/>
                      <circle cx="443" cy="1372" r="8" transform="rotate(180 443 1372)"/>
                      <circle cx="339" cy="1107" r="8" transform="rotate(180 339 1107)"/>
                      <circle cx="24" cy="1305" r="8" transform="rotate(180 24 1305)"/>
                      <circle cx="8" cy="8" r="8"/>
                      <circle cx="189" cy="157" r="8"/>
                      <circle cx="548" cy="76" r="8"/>
                      <circle cx="685" cy="347" r="8"/>
                      <circle cx="858" cy="141" r="8"/>
                      <circle cx="874" cy="670" r="8" transform="rotate(180 874 670)"/>
                      <circle cx="657" cy="488" r="8" transform="rotate(180 657 488)"/>
                      <circle cx="443" cy="604" r="8" transform="rotate(180 443 604)"/>
                      <circle cx="339" cy="339" r="8" transform="rotate(180 339 339)"/>
                      <circle cx="24" cy="537" r="8" transform="rotate(180 24 537)"/>
                   </g>
                </g>
            </svg>
        

    
    </div>
       
</body>
</html>