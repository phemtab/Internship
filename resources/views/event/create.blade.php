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

    <title>Event Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
        

    <style>
        @media only screen and (max-width: 600px) {
        #alert_2{
            display:none;
        }

        #alert2{
            display:none;
        }

        #head1,#head2,#alert2,#alert_2{
          width:200px;
           
        }

        #adddynamic , #modalbutton{
            float:left;     
        }

        
        #dynamic_field{
            width:260px;
        }

        #OwnerFirstName2,#OwnerLastName2,#location_event2,#inlineRadio5,#pleaseinput1,#datestart2,#dateend2,#timestart2,#timeend2,#NameEvent2,#description_event2{
            width: 22%;
        }

        #area{
            width:95%;
        }
    }

    @media (min-width:601px) {
        #modalbutton {
            float:right;     
        }

        #dynamic_field {
            width:1000px;
        }
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
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span><b>Event</b></span>
                </a>
    
            </li>

           

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-desktop"></i>
                    <span><b>Welcome Screen</b></span></a>
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
                                    src="{{asset('/img/undraw_profile.svg')}}">
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

                    <div class="row mx-1" id="area">

                        <!-- Area Chart -->
                        <div class="col-auto" style="width:1190px;">
                            <div class="card shadow mb-10">
                                
        
     <!-- ส่วนที่เป็น Content หลักแต่ละหน้า -->
        <div class="py-4 px-4">

             <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/intern/event">Main</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create Event</li>
        </ol>
        </nav>
        <!-- breadcrumb -->
        <span class="badge rounded-pill bg-dark text-white my-2" style="font-size:20px;">Create Event</span>                  
       
            
            <div class="row">
                    <div>
                   
                    <div class="card-body" style="width:1100px;">
                        
                        <div id="formcreate">
                        <form action="{{route('addEvent')}}" method="post" id="formevent">
                        @csrf
                        
                       <!-- icon head -->
                        <div id="head1"> 
                        <div class="form-row">
                        <div class="col" id="fas1">
                        <center><i class="fas fa-user-circle text-gray-800" style="font-size: 70px;" aria-hidden="true"></i>
                        <h4 class="text-gray-800">Step 1 General Event Info</h4></center>
                        </div>
                        
                        <div class="col">
                        <center><i class="fa fa-list-ol text-gray-400" style="font-size: 70px;" aria-hidden="true"></i>
                        <h4 class="text-gray-400">Step 2 Dynamic form</h4></center>
                        </div>
                        </div></div>

                        <div id="head2" style="display:none"> 
                        <div class="form-row">
                        <div class="col" id="fas2">
                        <center><i class="fas fa-user-circle text-gray-400" style="font-size: 70px;" aria-hidden="true"></i>
                        <h4 class="text-gray-400">Step 1 General Event Info</h4></center>
                        </div>
                        
                        <div class="col">
                        <center><i class="fa fa-list-ol text-gray-800" style="font-size: 70px;" aria-hidden="true"></i>
                        <h4 class="text-gray-800">Step 2 Dynamic form</h4></center>
                        </div>
                        </div></div>
                     
                        <div class="progress" id="alert_2" style="display:none">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" id="alert_3" style="display:none;width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        <div class="progress" id="alert2">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" id="alert3" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>

                            <div class="alert alert-primary d-flex align-items-center" role="alert" id="pleaseinput1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <div class="mx-2">
                                <b>Please input your form</b>
                            </div>
                            </div>    

                           
                           
                            
                            <div id="div1">
                            <label for="NameEvent" id="NameEvent1"><b>ชื่อ Event</b></label>
                            <input type="text" class="form-control" name="NameEvent" id="NameEvent2"  size="500" value="{{old('NameEvent')}}" placeholder="Ex.iPhone 12 Preorder">
                            @error('NameEvent')
                            <span class="text-danger my-2" id="dangername">{{$message}}</span>
                            @enderror
                            </div>
                           
                            
                            <div class="form-row" id="div2">
                            <div class="col-md-6">
                            <br><label for="OwnerFirstName" id="OwnerFirstName1"><b>ชื่อเจ้าของ Event</b></label>
                            <input type="text" class="form-control" id="OwnerFirstName2" name="OwnerFirstName" placeholder="Ex.Mr.Somchai" value="{{old('OwnerFirstName')}}">
                            @error('OwnerFirstName')
                            <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                            </div>
                           

                            
                            <div class="col-md-6">
                            <br><label for="OwnerLastName"  id="OwnerLastName1"><b>นามสกุลเจ้าของ Event</b></label>
                            <input type="text" class="form-control" id="OwnerLastName2" name="OwnerLastName" placeholder="Ex.Jaidee" value="{{old('OwnerLastName')}}">
                            @error('OwnerLastName')
                            <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                            </div>
                            </div>
                            
                           
                            
                            

                            <div class="form-row" id="div3">
                            <div class="col-md-6">
                            <br><label for="location_event" id="location_event1"><b>Location</b></label>
                            <input type="text" class="form-control" id="location_event2" name="location_event" placeholder="Ex.Iconsiam" value="{{old('location_event')}}">
                            @error('location_event')
                            <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                            </div>
                           

                            <div class="col-md-6">
                            <br><label for="Amount" id="Amount"><b>Amount</b></label>
                            <input type="text" id="inlineRadio5" class="form-control" name="Amount"   placeholder="Ex.100" value="{{old('Amount')}}">
                            @error('Amount')
                            <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                            </div>
                            </div>
                          

                            <div class="form-row" id="div4">
                            <div class="col-md-6">
                            <br><label for="datestart" id="datestart1"><b>วันที่เริ่มงาน</b></label>
                            <input type="date" class="form-control" id="datestart2" name="datestart" value="{{old('datestart')}}">
                            @error('datestart')
                            <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                            </div>
                            
                            <div class="col-md-6">
                            <br><label for="dateend" id="dateend1"><b>วันที่สิ้นสุดงาน</b></label>
                            <input type="date" class="form-control" id="dateend2"name="dateend" value="{{old('dateend')}}">
                            @error('dateend')
                            <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                            </div></div>
                            

                            <div class="form-row" id="div5">
                            <div class="col-md-6">
                            <br><label for="timestart" id="timestart1"><b>เวลาที่เริ่มงาน</b></label>
                            <input type="time" class="form-control" id="timestart2"name="timestart" value="{{old('timestart')}}">
                            @error('timestart')
                            <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                            </div>
                            

                            <div class="col-md-6">
                            <br><label for="timeend" id="timeend1"><b>เวลาที่สิ้นสุดงาน</b></label>
                            <input type="time" class="form-control" id="timeend2"name="timeend" value="{{old('timeend')}}">
                            @error('timeend')
                            <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                            </div></div>
                           
                            
                            <br><label for="description_event" id="description_event1"><b>Description</b></label>
                            <br><textarea type="text" class="form-control" rows="3" cols="110" name="description_event" id="description_event2" ></textarea>
                        
          <table class="table table-bordered" id="dynamic_field"></table>
      <center><button type="button" name="add" id="adddynamic" style="display:none" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</button></td></center>
      
      <br><button type="button" class='btn btn-info' id="hide">Next</button>



<br><button type="button" style="display:none" class='btn btn-info ml-3' id="back">Back</button>


<button type="button" class="btn btn-primary ml-3" style="display:none" id="modalbutton" name="modalbutton" data-toggle="modal" data-target="#myModal">Confirm</button>


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
      $(document).ready(function(){      
      
      var i=0;
      var j=0;
      var k=0;
      var m=0;
      var z=0;
      var x=4;
        
      $('#hide').click(function(){ 
        $('#NameEvent1').hide();
        $('#NameEvent2').hide();
        $('#OwnerFirstName1').hide();
        $('#OwnerFirstName2').hide();
        $('#OwnerLastName1').hide();
        $('#OwnerLastName2').hide();
        $('#inlineRadio1').hide();
        $('#inlineRadio2').hide();
        $('#inlineRadio3').hide();
        $('#inlineRadio4').hide();
        $('#inlineRadio5').hide();
        $('#alert1').hide();
        $('#alert2').hide();
        $('#alert3').hide();
        $('#div2').hide();
        $('#div3').hide();
        $('#div4').hide();
        $('#div5').hide();
        $('#Amount').hide();
        $('#location_event1').hide();
        $('#location_event2').hide();
        $('#timestart1').hide();
        $('#timestart2').hide();
        $('#timeend1').hide();
        $('#timeend2').hide();
        $('#datestart1').hide();
        $('#datestart2').hide();
        $('#dateend1').hide();
        $('#dateend2').hide();
        $('#description_event1').hide();
        $('#description_event2').hide();
        $('#1').show();
        $('#2').show();
        $('#3').show();
        $('#4').show();
        $('#5').show();
        $('#6').show();
        $('#7').show();
        $('#8').show();
        $('#ans1').show();
        $('#ans2').show();
        $('#ans3').show();
        $('#ans4').show();
        $('#ques1').show();
        $('#ques2').show();
        $('#ques3').show();
        $('#ques4').show();
        $('#row1').show();
        $('#row2').show();
        $('#row3').show();
        $('#row4').show();
        $('#alert_1').show();
        $('#alert_2').show();
        $('#alert_3').show();
        $('#hide').hide();
        $('#adddynamic').show();
        $('#submit').show();
        $('#back').show();
        $('#dangername').hide();
        $('#head1').hide();
        $('#head2').show();
        $('#modalbutton').show();
      });

      $('#back').click(function(){ 
        $('#NameEvent1').show();
        $('#NameEvent2').show();
        $('#OwnerFirstName1').show();
        $('#OwnerFirstName2').show();
        $('#OwnerLastName1').show();
        $('#OwnerLastName2').show();
        $('#inlineRadio1').show();
        $('#inlineRadio2').show();
        $('#inlineRadio3').show();
        $('#inlineRadio4').show();
        $('#inlineRadio5').show();
        $('#div2').show();
        $('#div3').show();
        $('#div4').show();
        $('#div5').show();
        $('#Amount').show();
        $('#location_event1').show();
        $('#location_event2').show();
        $('#timestart1').show();
        $('#timestart2').show();
        $('#timeend1').show();
        $('#timeend2').show();
        $('#datestart1').show();
        $('#datestart2').show();
        $('#dateend1').show();
        $('#dateend2').show();
        $('#description_event1').show();
        $('#description_event2').show();
        $('#ans1').hide();
        $('#ans2').hide();
        $('#ans3').hide();
        $('#ans4').hide();
        $('#ques1').hide();
        $('#ques2').hide();
        $('#ques3').hide();
        $('#ques4').hide();
        $('#1').hide();
        $('#2').hide();
        $('#3').hide();
        $('#4').hide();
        $('#row1').hide();
        $('#row2').hide();
        $('#row3').hide();
        $('#row4').hide();
       
        $('#alert_1').hide();
        $('#alert_2').hide();
        $('#alert_3').hide();
        $('#alert1').show();
        $('#alert2').show();
        $('#alert3').show();
        $('#hide').show();
        $('#adddynamic').hide();
        $('#submit').hide();
        $('#back').hide();
        $('dynamic_field').show();
        $('#dangername').show();
        $('#head1').show();
        $('#head2').hide();
        $('#modalbutton').hide();
      }); 

      //รับค่าการคลิก Add
      $('#adddynamic').click(function(){  
        

        if(j<4){
        j++;
        
        $('#dynamic_field').append('<tr id="row'+j+'" class="dynamic-added"><td><input type="text" id="ans'+j+'" name="ans'+j+'" placeholder="Question" class="form-control"  /></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
        }
       
        // if(i<4) {
        // i++;
        // $('#dynamic_field').append('<tr id="roww'+i+'" class="dynamic-added"><td><input type="text" id="ques'+i+'" name="ques'+i+'" placeholder="Answer" readonly="readonly" class="form-control"  /></td></tr>');  
            
        // }

      });  


    //   $('#inlineRadio1').click(function(){  
    //     if(k<1){
    //     m--;
    //     k++;
    //     $('#amountrow').append('<input type="range" value="0" min="0" max="10000" step="10" id="first" class="form-control" name="Amount" oninput="this.nextElementSibling.value = this.value" value="{{old('Amount')}}"><output id="firstkab">0</output>');
    //     $('#second').remove();
    //     $('#zero').remove();
    //     }

    //     if(k=1){
    //      $('#second').remove();
    //     }
        
    //   });



    //   $('#inlineRadio2').click(function(){  
    //     if(m<1){
    //     k--;
    //     m++;
    //     $('#amountrow').append('<input type="text" id="second" class="form-control" name="Amount" placeholder="Ex.100">');
    //     $('#first').remove();
    //     $('#firstkab').remove();
    //     $('#zero').remove();
    //     }

    //     if(m=1){
    //     $('#first').remove();
    //     $('#firstkab').remove();
    //     }
        
    //   });

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");  
           $('#row'+button_id+'').remove();
        //    $('#roww'+button_id+'').remove();
        //    i--;
           j--;
      });  
      
    });   
</script>




            

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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
    <script src="{{asset('vendor/jquery/jquery.min.js')}})"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>


</body>

</html>