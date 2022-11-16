<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Event Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <style>
        
        *{margin:0;padding:0;}
       
       .tableresponsive{
       
      
       margin:15px auto;
       }
        
       .tabledata{
       width:100%;
       padding:0;
       margin:0;
       font-family: Verdana, Geneva, Tahoma, sans-serif;
       font-size: 13px;
       color:#9c9b99;
       }
       .tabledata thead tr th{
       background:#0eac38;
       color:#fff;
       text-align: center;
       padding:7px 5px;
       
       }
       .tabledata tbody tr td{
       padding:7px 5px;
       text-align: center;
       cursor:pointer;
       border-bottom: 1px solid #d6d6d6;
       }
       
       .tabledataa a{
       display:inline-block;
       border: 1px solid #189e3d;
       padding:5px;
       color:#a09a9a;
       background:#fff;
       -webkit-transition: all .25s ease-out;
       -moz-transition: all .25s ease-out;
       -ms-transition: all .25s ease-out;
       -o-transition: all .25s ease-out;
       transition: all .25s ease-out;     
       }
       .tabledataa a:hover{
       background:#189e3d;
       color:#fff;
       }   
       .tabledataa tbody tr:hover td{
       background:#7f7f7f;
       color:#fff;
       }
         
         @media only screen and (max-width: 1200px) {
         
          .tableresponsive table,
          .tableresponsive thead, 
          .tableresponsive tbody, 
          .tableresponsive th, 
          .tableresponsive td, 
          .tableresponsive tr
          { 
          
             display:block ;
            
          }  
          
          .tableresponsive thead tr { 
             position: absolute ;
               top: -9999px;
               left: -9999px;
            }   
          .tableresponsive tr { border: 1px solid #ccc; }
    
            .tableresponsive td { 
           
              border: none;
              border-bottom: 1px solid #eee; 
              position: relative;
              padding-left: 70% !important; 
              white-space: normal;
              text-align:left;
              
             }
    
           .tableresponsive td:before { 
           
              position: absolute;
              top: 15px;
              left: 6px;
              width: 50%; 
              padding-right: 10px; 
              white-space: nowrap;
              text-align:left;
              font-weight: bold;
              }
    
   
             .tableresponsive td:before { content: attr(data-title); }
             
             #buttoncreate {
                position: absolute;
                text-align:left;
                display: block;
                

             }

             td a{
                 width:2%;
             }
    
             #eventinfo{
                 display:none;

             }

             #main{
                 width:30%;
             }

             #area{
                width:95%;
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

           

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#WelcomeScreen"
                    aria-expanded="true" aria-controls="WelcomeScreen">
                    <i class="fas fa-fw fa-desktop"></i>
                    <span><b>Welcome Screen</b></span>
                </a>
                <div id="WelcomeScreen" class="collapse" aria-labelledby="WelcomeScreen"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item active" href="/welcome_screen">Welcome Screen List</a>
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

                     <!-- Search Widget -->
            <form class="card-body" action="{{route('searchroute')}}"  method="GET" >
                <div class="input-group">
                    <input type="text" class="form-control" id="mySelect" placeholder="Search for..." name="search"><button class="btn btn-primary" type="submit"><i class="fas fa-search fa-sm"></i></button>
                </div>
            </form>
            

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


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
                                        <img class="rounded-circle" src="{{asset('img/undraw_profile_1.svg')}}"
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
                                        <img class="rounded-circle" src="{{asset('img/undraw_profile_2.svg')}}"
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
                                        <img class="rounded-circle" src="{{asset('img/undraw_profile_3.svg')}}"
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
                                    src="{{asset('public/img/undraw_profile.svg')}}">
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
                        <div class="col-auto mx-2" style="width:1190px;" >
                            <div class="card shadow mb-10 ">
                          

    <!-- ส่วนที่เป็น Content หลักแต่ละหน้า -->
    <div class="py-4 px-4">
                <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/intern/event">Main</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Search</li>
                        
                    </ol>
                    </nav>

                    
            <span class="badge rounded-pill bg-dark text-white my-2" style="font-size:20px;" id="eventinfo">Search</span>
            
                        <!-- ปุ่มแสดง Create และ Trash -->
                        
                        <td><a href="{{url('/event/create')}}" class="btn btn-success border border-dark md-3 float-lg-right my-1" id="create" style="width:118px;height:30px;font-size:14.5px;"><b><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Event</b></a></td>
                        <td><a href="{{url('/event/trash')}}" class="btn btn-warning border border-dark md-3 float-lg-right my-1" style="width:85px;height:30px;font-size:14.5px;"><b><i class="fas fa-archive"></i> Trash</b></a></td>
        
                        
                        <button class="btn btn-secondary dropdown-toggle float-lg-right my-1" type="button" style="width:80px;height:30px;font-size:14.5px;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b><i class="fas fa-align-center"></i> Sort</b>
                        </button>


                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="test">
                        <li><a class="dropdown-item" href="{{url('/event/')}}">Created time Sort</a></li>
                        <li><a class="dropdown-item" href="{{url('/event/namesort')}}">Name Sort</a></li>
                        <li><a class="dropdown-item" href="{{url('/event/timestartsort')}}">Time Start Sort</a></li>
                        <li><a class="dropdown-item"  href="{{url('/event/datestartsort')}}">Date Start Sort</a></li>
                        <li><a class="dropdown-item"  href="{{url('/event/tagendsort')}}">End Sort</a></li>
                        <li><a class="dropdown-item"  href="{{url('/event/tagwaitsort')}}">Active Sort</a></li>
                        </div>
                        </td>
                        
        
                        
            
                        {{$search_view->links("pagination::bootstrap-4")}}
                    
                    <div class="tableresponsive">

                        <table class="table table-striped table-hover" id="tabledata">
                        <thead>
                            <tr align="center">
                            <th scope="col" style="display:none">UUID</th>
                            <th scope="col" ></th>
                            <th scope="col">NameEvent</th>
                            <th scope="col">DateStart</th>
                            <th scope="col">DateEnd</th>
                            <th scope="col">TimeStart</th>
                            <th scope="col">TimeEnd</th>
                            <th scope="col">Location</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">View</th>
                            <th scope="col">QR</th>
                            
                            </tr>
                        </thead>
                <tbody>
                    @foreach($search_view as $row)
                <tr align="center">
                    <td style="display:none" data-title="uuid">{{$row->uuid}}</td>
                    @if($row->status=="END")
                    <td data-title="Status"><button class="badge badge-dark" style="font-size:10px"><b>{{$row->status}}</b></button></td>
                    @elseif($row->status=="ACTIVE")
                    <td data-title="Status"><button class="badge badge-success" style="font-size:10px"><b>{{$row->status}}</b></button></td>
                    @else
                    <td data-title="Status"><button class="badge badge-danger" style="font-size:10px"><b>{{$row->status}}</b></button></td>
                    @endif

                    <td data-title="NameEvent"><a href="{{url('/event/view/'.$row->NameEvent )}}"><h6><b>{{$row->NameEvent}} </b></h6></td></a>
                    <td data-title="DateStart"><b>{{$row->datestart}}</b></td>
                    <td data-title="DateEnd"><b>{{$row->dateend}}</b></td>
                    <td data-title="TimeStart"><b>{{$row->timestart}}</b></td>
                    <td data-title="TimeEnd"><b>{{$row->timeend}}</b></td>
                    <td data-title="Location"><b>{{$row->location_event}}</b></td>

                    <td data-title="Edit"><a href="{{url('/event/edit/'.$row->id)}}"  ><i class="fas fa-edit"></i></a></td>
                    <td data-title="Delete"><a href="{{url('/event/softdelete/'.$row->id )}}" onclick="return confirm('คุณต้องการย้ายข้อมูล Event นี้ไปถังขยะหรือไม่ ?')"><i class="fas fa-trash"></i></a></td>
                    <td data-title="View"><a href="{{url('/event/view/'.$row->NameEvent )}}"  ><i class="fas fa-info-circle"></i></a></td>
                    <td data-title="QR"><a href="{{url('/event/qrcode/'.$row->uuid )}}" ><i class="fa fa-qrcode"></i></a></td>
                </tr>
                @endforeach           
                </tbody>
                </table>
            {{$search_view->links("pagination::bootstrap-4")}}
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
    <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('public/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('public/js/demo/chart-area-demo.js')}}"></script>
    

</body>

</html>