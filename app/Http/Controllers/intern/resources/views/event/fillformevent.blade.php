<!DOCTYPE html>
<html lang="en">

<head>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="jquery-3.2.1.min.js"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event Register</title>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Custom fonts for this template-->
    <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/cropper.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    

    <style>

/* .g-recaptcha{
  position : fixed;
  bottom :0;
  right: 300;
} */

.page {
	margin: 1em auto;
	max-width: 768px;
	display: flex;
	align-items: flex-start;
	flex-wrap: wrap;
	height: 100%;
}


#buttonmodal{
    border:2px solid black;
    background-color: blue;
    color:white;
}
.box {
	padding: 0.5em;
	width: 100%;
	margin:0.5em;
}

.box-2 {
	padding: 0.5em;
	width: calc(100%/2 - 1em);
}


.options input{
	width:4em;
	padding:0.5em 1em;
}


.hide {
	display: none;
}

img {
	max-width: 100%;
}

.box>input {
  display: none;
}
        </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">  

    <!-- ส่วนที่เป็น Content หลักแต่ละหน้า -->
    <div class="py-4">
      
            @if($count<$allpeople) 
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
            </svg>

                        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2 mx-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
            <h4 class="my-2">ขณะนี้ Event {{$event->NameEvent}} สามารถรองรับการลงทะเบียนได้ มีผู้ลงทะเบียนเท่ากับ {{$count}} คน จาก {{$allpeople}} คน</h4>
            </div>
            </div>
            @endif

            @if($count>=$allpeople) 
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
        </svg>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
             <h4 class="my-2">&nbsp;&nbsp;ขณะนี้มีผู้ลงทะเบียนเกินกว่าจำนวนที่รองรับได้แล้ว กรุณาติดต่อผู้จัดงาน</h4>
        </div>
        </div>
        @endif
       
                <div class="card">
                    <div class="card-header"><div class="badge rounded-pill bg-dark text-white my-1" style="font-size:20px;">Form Event</div></div>
                    <div class="card-body">
                        
                        <form action="{{route('adduser')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- <div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="6LeT1A8bAAAAAKHBDV81-QHr--cI-EUYQGNsg4eG"></div>
                            @error('g-recaptcha-response')
                                <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                          </div> -->


                        <!-- Profile Picture -->
                            <div class="card">
                        <div class="card-body">    
                        <center><label><b>Profile Picture</b></label></center>

                <center><div class="box">
                      <label for="file-input">
                        <img class="cropped" src="https://user.gadjian.com/static/images/personnel_boy.png"/>
                      </label>
                      <figcaption><i class="fa fa-camera"></i></figcaption>
                      <input id="file-input" type="file" class="form-control"></input>
                </div></center>

                      <!-- Field รับ base64 -->
                        <input type="text" class="UserPic" style="display:none;" name="UserPic"value=""></input>
                       
                        
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Select Crop Picture</h4>
                            <button type="button" class="close" onclick="myFunction()">&times;</button>
                          </div>
                          <div class="modal-body">
                      <p>กรุณา Crop รูปส่วนใบหน้าของท่านโดยการ Zoom เข้าออกตามต้องการ</p>
                      <main class="page">
                       <!-- leftbox -->
                       <div class="box-2">
                         <div class="result"></div>
                       </div>
                       <!--rightbox-->
                       <div class="container">
                       <div class="box-2 img-result hide">
                         <!-- result of crop -->
                         <!-- <img class="cropped" src="" alt=""> -->
                       </div>
                       </div>
                       <!-- input file -->
                       <div class="box">
                         <div class="options hide">

                         </div>
                         <!-- save btn -->
                         <button class="btn save hide" id="buttonmodal" onclick="myFunction()">Crop Image</button>
                          </div>
                       </main>

                          </div>

                          </div>
                        </div>
                      </div>
                    </div>
</div>
                    

                        @error('UserPic')
                            <span class="text-danger my-2">{{$message}}</span>
                        @enderror


                        

                        <div class="card">
                        <div class="card-body">
                        <label for="NameEvent"><b>ชื่อ Event</b></label>
                                      <input type="text" class="form-control" name="NameEvent" size="500" value="{{$event->NameEvent}}" readonly="readonly">
                                      <!-- แจ้ง Error Message -->
                                      @error('NameEvent')
                                      <span class="text-danger my-2">{{$message}}</span>
                                      @enderror
                                                    
                        </div>
                        </div>

                        
                           
                        <div class="card mt-2">
                        <div class="card-body">
                        <label for="UserFirstName"><b>ชื่อจริง</b></label>
                                                    <input type="text" class="form-control" name="UserFirstName" placeholder="Ex.นางสาวพลอย" value="{{old('UserFirstName')}}">
            
                                                    
                                                    <!-- แจ้ง Error Message -->
                                    @error('UserFirstName')
                                        <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                        </div>
                        </div>

                            
                           
                        <div class="card mt-2">
                        <div class="card-body">
                        <label for="UserLastName"><b>นามสกุล</b></label>
                                                    <input type="text" class="form-control" name="UserLastName" placeholder="Ex.สวยใส"value="{{old('UserLastName')}}">
                                                  <!-- แจ้ง Error Message -->
                                    @error('UserLastName')
                                        <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                        </div>

                        </div>
                            
                            
                        <div class="card mt-2">
                        <div class="card-body">
                        <label for="passportID"><b>เลขบัตรประชาขน</b></label>
                                                    <input type="text" class="form-control" name="passportID" placeholder="Ex.1499900182240" value="{{old('passportID')}}" maxlength="13">
                                                    <!-- แจ้ง Error Message -->
                                    @error('passportID')
                                        <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                        </div>
                        </div>
                            
                        <div class="card mt-2">
                        <div class="card-body">
                        <label for="email"><b>E-mail</b></label>
                                                    <input type="email" class="form-control" placeholder="Ex.example@gmail.com" name="email" value="{{old('email')}}">
                                                    <!-- แจ้ง Error Message -->
                                    @error('email')
                                        <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                                                    
                        </div>

                        </div>

                        <div class="card mt-2">
                        <div class="card-body">
                        <label for="telephone"><b>Telephone</b></label>
                                                    <input type="tel" class="form-control" placeholder="Ex.0991987333"name="telephone" value="{{old('telephone')}}" maxlength="10">
                                                    <!-- แจ้ง Error Message -->
                                    @error('telephone')
                                        <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                        </div>
                        </div>
                           
                          
                        @if(!empty ($event-> dynamic_0))
                        <div class="card mt-2">
                          <div class="card-body">
                          <label><b>คำถามเพิ่มเติม</b></label>
                            @if(!empty ($event-> dynamic_0))
                            <tr>
                            <br><td>{{$event->dynamic_0}} </td>
                            <td><input type="text" class="form-control mt-1" name="dynamic_1" value="{{old('dynamic_0')}}" > </td>
                            @endif

                            @if(!empty ($event-> dynamic_2) )
                            <br><td>{{$event->dynamic_2}} </td>
                            <td><input type="text" class="form-control mt-1" name="dynamic_3" value="{{old('dynamic_2')}}" > </td>
                            @endif
                            
                            @if(!empty ($event-> dynamic_4) )
                            <br><td>{{$event->dynamic_4}} </td>
                            <td><input type="text" class="form-control mt-1" name="dynamic_5" value="{{old('dynamic_4')}}"> </td>
                            @endif
                           
                            @if(!empty ($event-> dynamic_6) )
                            <br><td>{{$event->dynamic_6}} </td>
                            <td><input type="text" class="form-control mt-1" name="dynamic_7" value="{{old('dynamic_6')}}"> </td>
                            </tr>
                            @endif
                        @endif   
                                
                            </div>

                          
                          
                            <span>
                            @if($count<$allpeople)            
                         
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary m-4"  id="modalbutton" name="modalbutton" data-toggle="modal" data-target="#myModal2">Confirm</button>
                       
                            <!-- The Modal -->
                            <div class="modal" id="myModal2">
                              <div class="modal-dialog">
                                <div class="modal-content">

                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">Confirmation </h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>

                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    ยืนยันที่จะบันทึก Event นี้หรือไม่?
                                  </div>

                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-primary mt-3" data-dismiss="modal">Close</button>
                                  <input type="submit" value="บันทึก" id="submit" class="btn btn-info mt-3"></span>
                                  </div>

                                </div>
                              </div>
                            </div>
                             @endif
                            </span>
                             

                         

</div>
                            
                          
                      
                          
                         
                            
                            
                                                        </form>

                    </div>

                </div>
            </div>
            
 
    </div>

            </div>
        </div>
    </div>


    </body>


            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

var modal = document.getElementById("myModal");

$("#file-input").change(function(){
    modal.style.display = "block";

});

function myFunction() {
  modal.style.display = "none";
}

// vars
let result = document.querySelector('.result'),
img_result = document.querySelector('.img-result'),
img_h = document.querySelector('.img-h'),
options = document.querySelector('.options'),
save = document.querySelector('.save'),
cropped = document.querySelector('.cropped'),
UserPic = document.querySelector('.UserPic'),
dwn = document.querySelector('.download'),
upload = document.querySelector('#file-input'),
cropper = '';

// on change show image with crop options
upload.addEventListener('change', (e) => {
  if (e.target.files.length) {
		// start file reader
    const reader = new FileReader();
    reader.onload = (e)=> {
      if(e.target.result){
				// create new image
				let img = document.createElement('img');
				img.id = 'image';
				img.src = e.target.result
				// clean result before
				result.innerHTML = '';
				// append new image
        result.appendChild(img);
				// show save btn and options
				save.classList.remove('hide');
				options.classList.remove('hide');
				// init cropper
				cropper = new Cropper(img);
      }
    };
    reader.readAsDataURL(e.target.files[0]);
  }
});

// save on click
save.addEventListener('click',(e)=>{
  e.preventDefault();
  // get result to data uri
  let imgSrc = cropper.getCroppedCanvas({width:300,height:300 }).toDataURL();
  // remove hide class of img
  cropped.classList.remove('hide');
	img_result.classList.remove('hide');
	// show image cropped
  cropped.src = imgSrc;
  UserPic.value = imgSrc;
  dwn.classList.remove('hide');
  dwn.download = 'imagename.png';
  dwn.setAttribute('href',imgSrc);
});


</script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
    
    <script src='https://www.google.com/recaptcha/api.js'></script>


    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('public/js/cropper.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('public/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('public/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('public/js/demo/chart-pie-demo.js')}}"></script>


</body>

</html>