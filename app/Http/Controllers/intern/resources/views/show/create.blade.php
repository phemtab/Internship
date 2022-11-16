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
    <script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js' type='text/javascript'></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <style>


    #container { width: 500px; height: 281.25px; margin: auto; }
    #container2 { width: 780px;height: 400px; margin: auto;}
    #container h3 { text-align: center; margin: 0; margin-bottom: 10px; }
    #resizable, #container, #container2 { padding: 0.5em; }
    
    .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
    border: 1px solid #003eff;
    background: #E5E6E3;
    font-weight: normal;
    color: #000000;
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

    div.scrollmenu {
    overflow: auto;
    white-space: nowrap;
    }

    div.scrollmenu a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
    }

    div.scrollmenu a:hover {
    background-color: #777;
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
                <div class="container="overflow-x: auto;">

                   
                    
                    <div class="row" style="overflow-x: auto;">

                    <!-- Content Row -->

                    <div class="row mx-1" style="overflow-x: auto;">

                        <!-- Area Chart -->
                        <div class="col-auto mx-4" style="width:1190px;" >
                            <div class="card shadow mb-10" style="overflow-x: auto;">
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
                               
                            <div id="div1" class="row">
                                <div class="col">
                                    <label for="name" id="name1"><b>Welcome Screen Name</b></label>
                                    <input type="text" class="form-control" name="name" id="name1"  size="250" value="{{old('name')}}" placeholder="Ex. Screen1">
                                    @error('name')
                                    <span class="text-danger my-2" id="dangername">{{$message}}</span>  
                                    @enderror
                                   
                                </div>
                                <div class="col">
                                    <label for="device"><b>เลือก device</b></label>
                                    <select name="device_id" id="device_id" class="form-control">
                                    <option value="">เลือก device</option>
                                    @foreach ($devices as $device => $value)
                                    <option {{ old('device') == $device ? "selected" : "" }} value="{{ $value->id }}">{{$value->devicename}}</option>
                                    @endforeach
                                    </select>
                                    @error('device')
                                    <span class="text-danger my-2">{{$message}}</span>
                                    @enderror
                                </div>
                                <br>
                            </div>
                            <br>
                            <div id="div2" class="row">
                                <div class="col">
                                    <label for="device"><b>วันที่เริ่ม</b></label>
                                    <input type="date" name="datestart" id="datestart" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="device"><b>วันที่สิ้นสุด</b></label>
                                    <input type="date" name="dateend" id="dateend" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div id="div3" class="row">
                                <div class="col">
                                    <label for="device"><b>เวลาเริ่ม</b></label>
                                    <input type="time" name="timestart" id="timestart" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="device"><b>เวลาสิ้นสุด</b></label>
                                    <input type="time" name="timeend" id="timeend" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div id="div4" class="row">
                                <label for="person_id"><b>Person</b></label><br>
                                <div class="col">
                                    <table class="table table-striped table-hover" width="25%">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        @foreach($persons as $person => $value)
                                            @if(($person) % 3 == 0)
                                            <tr>
                                            @else
                                            @endif
                                        
                                            <td style="width: 250px;"><input type="checkbox" name="person_id[]" id="{{$value->id}}" style="margin-right:10px;" value="{{$value->id}}">{{$value->firstname}}</td>
                                                
                                           
                                        @endforeach
                                       
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="div5" class="row">
                                <label for="visitor_id"><b>Visitor</b></label>
                                <div class="col">
                                    <table class="table table-striped table-hover" width="25%">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        @foreach($visitors as $visitor => $value)
                                            @if(($visitor) % 3 == 0)
                                            <tr>
                                            @else
                                            @endif
                                        
                                            <td style="width: 250px;"><input type="checkbox" name="visitor_id[]" id="{{$value->id}}" style="margin-right:10px;" value="{{$value->id}}">{{$value->firstname}}</td>
                                                
                                           
                                        @endforeach
                                       
                                    </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                            <div id="div6" class="row">
                            <label for="theme"><b>Theme</b></label>
                                <div class="scrollmenu" id="fortheme">
                                    <div class="row" style="display: flex;flex-wrap:nowrap;margin-right: -.75rem;margin-left: -.75rem;width: auto;">
                                        <div class="col" style="text-align: center;">
                                            <input type="checkbox" name="theme" id="theme1" value="space" style="text-align: center;"><label class="checkbox-inline" for="preview1" style="text-align: center;"> Space</label><br>
                                            <iframe src="https://dev.invp.co.th/intern/welcome_screen/preview1" frameborder="0" style="width: 500px; height: 281.25px;"></iframe>
                                        </div>
                                        <div class="col" style="text-align: center;">
                                            <input type="checkbox" name="theme" id="theme2" value="office" ><label class="checkbox-inline" for="preview1" style="text-align: center;"> Office</label><br>
                                            <iframe src="https://dev.invp.co.th/intern/welcome_screen/preview2" frameborder="0" style="width: 500px; height: 281.25px;"></iframe>
                                        </div>
                                        <div class="col" style="text-align: center;">
                                            <input type="checkbox" name="theme" id="theme2" value="theme_3" ><label class="checkbox-inline" for="preview1" style="text-align: center;"> Theme 3</label><br>
                                            <iframe src="https://dev.invp.co.th/intern/welcome_screen/preview3" frameborder="0" style="width: 500px; height: 281.25px;"></iframe>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <br><br>
                            <div id="div7" class="row">
                                <br><br>
                                <div class="col">
                                    <label for="message-top"><b> ข้อความบน</b></label>
                                    <input type="text" class="form-control" name="message-top" id="message-top" placeholder="Ex.สวัสดี">
                                </div>
                                <div class="col">
                                    <label for="message-bot"><b>ข้อความล่าง</b></label>
                                    <input type="text" class="form-control" name="message-bottom" id="message-bottom" placeholder="Ex.ประชุมที่ห้อง 101 ชั้น 4">
                                </div>
                            </div>
                            <br>
                            <div id="div8" class="row">
                                
                            </div>
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
    <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('public/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('public/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('public/js/demo/chart-pie-demo.js')}}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js')}}"></script>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</body>

</html>