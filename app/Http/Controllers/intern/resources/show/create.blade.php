<!DOCTYPE html>
<html lang="en">

<head>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Welcome Screen</title>

    <!-- Custom fonts for this template-->
    <link href='/../css/jquery.mentionsInput.css' rel='stylesheet' type='text/css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js' type='text/javascript'></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="/../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/../css/sb-admin-2.min.css" rel="stylesheet">

    <style>
    .select2-container .select2-selection--multiple {
    min-height: 40px;
}

    #HASH {
    width: 100%;
    }

    #HASH div {
    width: 49%;
    display: inline-block;
    height: 31px;
    }

    #right {
    text-align: right;
    }
    </style>           
</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-similar sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/intern/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-4">Face Connect</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li

            <!-- Nav Item - Person Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePerson"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span><b>Person</b></span>
                </a>
                <div id="collapsePerson" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Visitor Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span><b>Visitor</b></span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-clock"></i>
                    <span><b>Time Attendance</b></span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span><b>Event</b></span>
                </a>
    
            </li>

           

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#WelcomeScreen"
                    aria-expanded="true" aria-controls="WelcomeScreen">
                    <i class="fas fa-fw fa-desktop"></i>
                    <span><b>Welcome Screen</b></span>
                </a>
                <div id="WelcomeScreen" class="collapse" aria-labelledby="WelcomeScreen"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="/welcome_screen">Welcome Screen List</a>
                        <a class="collapse-item" href="/defCustom">Setting Demo</a>
                        <a class="collapse-item" href="/show">Demo</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLogs"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span><b>Logs</b></span>
                </a>
                <div id="collapseLogs" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCog"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-cog"></i>
                    <span><b>Advance</b></span>
                </a>
                <div id="collapseCog" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAVCommand"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-code"></i>
                    <span style="font-size:12.2px"><b>Advance Device Command</b></span>
                </a>
                <div id="collapseAVCommand" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="/../img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="/../img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="/../img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="draw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    
                    <div class="row">

                    <!-- Content Row -->

                    <div class="row mx-1">

                        <!-- Area Chart -->
                        <div class="col-auto mx-4" style="width:1190px;" >
                            <div class="card shadow mb-10">
                            <html>
                                
        
     <!-- ส่วนที่เป็น Content หลักแต่ละหน้า -->
        <div class="py-4">
        <div class="container">
             <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/welcome_screen">Welcome Screen</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create Welcome Screen</li>
        </ol>
        </nav>
        <!-- breadcrumb -->            
            <div class="row">
            
                
                    <div>
                   
                    <div class="card-body" style="width:1100px;">
                        
                        <div id="formcreate">
                        <form action="{{route('storeShow')}}" method="post" id="showform" enctype="multipart/form-data">
                        @csrf

                            <div class="alert alert-primary d-flex align-items-center" role="alert" id="pleaseinput1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <div>
                                &nbsp; <b>กรุณากรอกแบบฟอร์ม</b>
                            </div>
                            </div>    

                           
                           
                            
                            <div id="div1">
                            <label for="name" id="name1"><b>Welcome Screen Name</b></label>
                            <input type="text" class="form-control" name="name" id="name1"  size="500" value="{{old('name')}}" placeholder="Ex. Screen 1">
                            @error('name')
                            <span class="text-danger my-2" id="dangername">{{$message}}</span>
                            @enderror
                            </div>
                           
                            <div class="form-row" id="div2">
                            <div class="col">
                            <br>
                            
                            
                            <label for="bgsetting" id="bgsetting"><b>ตั้งค่าพื้นหลัง</b></label><br>
                            <form action="{{route('storeShow')}}" method="post" enctype="multipart/form-data">

                                <input type="radio" id="backgroundfile_radio" name="background_radio" value="backgroundfile_radio">
                                    <label for="background_id_file">อัพโหลดพื้นหลัง (สกุล jpeg, png, jpg, mp4)</label>
                                    <input type="file" id="background_id_file" name="background_id_file"><br>


                                <input type="radio" id="backgroundcolor_radio" name="background_radio" value="backgroundcolor_radio">
                                    <label for="background_id_color">เลือกสีพื้นหลัง</label>
                                    <input type="color" id="background_id_color" name="background_id_color" value="#ff0000">
                                    <br><br>
                            
                            
                            <div class="examples">
                            <label for="meassage" id="message"><b>ข้อความที่แสดง</b></label>
                            <br><textarea type="text" rows="3" cols="110" class="mention" name="message" id="message" placeholder='พิมพ์ @ ตามด้วยชื่อคนที่ต้องการ เช่น @tony'></textarea><br><br>
                            </div>
                            

                            
                            <!-- ตั้งค่าการแสดง -->
                            <label for="setting" id="setting"><b>ตั้งค่าการแสดง</b></label><br>
                            <!-- Dropdown menu เลือก person -->
                            <div class="form-row" id="div1">
                                <div class="col">
                                    <label for="person">เลือก person</label><br>
                                    <select class="js-example-basic-multiple" multiple="multiple" data-live-search="true" name="person_id[]">
                                    @foreach($persons as $person => $value)
                                    <option {{ old('person') == $person ? "selected" : "" }} value="{{ $value->id }}">{{$value->firstname}}</option>
                                    @endforeach
                                    </select>
                                    @error('person')
                                    <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="visitor">เลือก visitor</label><br>
                                    <select class="js-example-basic-multiple" multiple="multiple" data-live-search="true" name="visitor_id[]">
                                    @foreach($visitors as $visitor =>$value)
                                    <option {{ old('visitor') == $visitor ? "selected" : "" }} value="{{ $value->id }}">{{$value->firstname}}</option>
                                    @endforeach
                                    @error('visitor')
                                    <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col" id="div2">
                                    <label for="device">เลือก device</label>
                                    <select name="device" id="device">
                                    <option value="">เลือก device</option>
                                    @foreach ($devices as $device => $value)
                                    <option {{ old('device') == $device ? "selected" : "" }} value="{{ $value->id }}">{{$value->devicename}}</option>
                                    @endforeach
                                    </select>
                                    @error('device')
                                    <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                                </div>

                            
                                <div class="col" id="div3">
                                    <label for="device">เลือก device</label>
                                    <select name="device_id" id="device_id">
                                    <option value="">เลือก device</option>
                                    @foreach ($devices as $device => $value)
                                    <option {{ old('device') == $device ? "selected" : "" }} value="{{ $value->id }}">{{$value->devicename}}</option>
                                    @endforeach
                                    </select>
                                    @error('device')
                                    <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <div>
                                <br>
                                    <div>
                                        <label for="timestart">เวลาเริ่ม</label>
                                        <input type="time" id="timestart" name="timestart">
                                    </div>
                                    <div>
                                        <label for="timeend">เวลาสิ้นสุด</label>
                                        <input type="time" id="timeend" name="timeend">
                                    </div>
                                </div>

                                <div>
                                <br>
                                    <div>
                                        <label for="datestart">วันที่เริ่ม</label>
                                        <input type="date" id="datestart" name="datestart">
                                    </div>
                                    <div>
                                        <label for="dateend">วันที่สิ้นสุด</label>
                                        <input type="date" id="dateend" name="dateend">
                                    </div>
                                </div>





                            <div>
                            
                            
                                
                            
                        
                            

                            </form>
                            
                            
                            
                            </div>
                            <br><br><br><br><br><br><br><br><br>
                        </div>
 

<div id="HASH">
    <div id="left">
        <button type="button" class='btn btn-danger mt-3' id="back">Back</button>
    </div>
    <div id="right">
        <button type="button" class="btn btn-primary mt-3 float-right" id="modalbutton" name="modalbutton" data-toggle="modal" data-target="#myModal">Confirm</button>
    </div>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Confirmation </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        ยืนยันที่จะบันทึก Welcome Screen นี้หรือไม่?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-primary mt-3" data-dismiss="modal">Close</button>
      <input type="submit" value="บันทึก" id="submit" class="btn btn-info mt-3" onclick="radioButton()"></span>
      </div>

    </div>
  </div>
</div>



                        </form>

                    </div>
                    
                    
                    
                </div>
            </div>

            
  <thead>
    
   
    
    </div>

  
  
    </tbody>
</table>

            </div>
        </div>
    </div>


    <!-- //๋Javascript Part -->
    <script type="text/javascript">

    
    function goBack() {
        window.history.back();
    }

    $(function()
    {
    $(".js-example-basic-multiple").select2({ width: '400px' });
    });

    </script>
    


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; INVP 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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

    <!-- Bootstrap core JavaScript-->
    <script src="/../vendor/jquery/jquery.min.js"></script>
    <script src="/../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/../js/demo/chart-area-demo.js"></script>
    <script src="/../js/demo/chart-pie-demo.js"></script>

    <script src='/../js/jquery.events.input.js' type='text/javascript'></script>
    <script src='/../js/jquery.elastic.js' type='text/javascript'></script>
    <script src='/../js/jquery.mentionsInput.js' type='text/javascript'></script>
    <script src='/../js/examples.js' type='text/javascript'></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <script type="text/javascript">

    let type;

    $('textarea.mention').mentionsInput({
    onDataRequest:function (mode, query, callback) {

        var person = {!! json_encode($persons->toArray()) !!};
        var visitor = {!! json_encode($visitors->toArray()) !!};
        var data = person.concat(visitor)
            

        data = _.filter(data, function(item) { return item.firstname.toLowerCase().indexOf(query.toLowerCase()) > -1 });

        console.log(data);

        callback.call(this, data);
    }
    });

    function radioButton() {
        
        

        if(document.getElementById('backgroundfile_radio').checked){ 
            document.getElementById('backgroundfile_radio').disabled = true;
            document.getElementById('backgroundcolor_radio').disabled = true;
            document.getElementById('background_id_color').disabled = true;


        }else if(document.getElementById('backgroundcolor_radio').checked) {
            document.getElementById('backgroundfile_radio').disabled = true;
            document.getElementById('backgroundcolor_radio').disabled = true;
            document.getElementById('background_id_file').disabled = true;

        }

    }

    </script>

</body>

</html>