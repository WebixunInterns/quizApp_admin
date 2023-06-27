<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/logo.png') }}" />
    {{-- <img src="{{ asset('images/logos/logo-w.png') }}" width="160" alt="" /> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--  Body Wrapper -->
   
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{url("dashboard")}}" class="text-nowrap logo-img">
                        <img src="{{ asset('images/logos/logo.png') }}" width="160" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>

                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url("dashboard")}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url("getStudentList")}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">Student Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url("getCourseList")}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-certificate"></i>
                                </span>
                                <span class="hide-menu">Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url("getCollegeList")}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-school"></i>
                                </span>
                                <span class="hide-menu">College</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url("getSubjectList")}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-book"></i>
                                </span>
                                <span class="hide-menu">Subject</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url("getSubjectQuizList")}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Quiz List</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url("getAdminList")}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">Admin Profile</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                            href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>



                <h2>Course List</h2>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset("/images/profile/user-1.jpg")}}" alt="" width="35" height="35"
                                    class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="{{url("getAdminProfile")}}"
                                        class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a>
                                    <a href="{{url("admin-logout")}}"
                                        class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-md-10">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-md-2 d-flex align-items-center justify-content-end">
                       <a href="{{url("getCourse")}}">
                        <button type="button" class="btn btn-primary me-2 " id="openModalBtn" data-bs-toggle="modal"
                        data-bs-target="#add-course">Add
                        Course</button>
                    </a>
                    </div>
                </div>


                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true" id="add-course">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           
                            <div class="modal-body">
                                <div class="container-fluid">

                                    <div class="row">

                                        <div class="col-md-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body2 rounded">


                                                    <form class="forms-sample" action="{{url("addCourse")}}">
                                                        <div class="form-group row">
                                                            <label for="exampleInputUsername2"
                                                                class="col-sm-3 col-form-label mt-3">
                                                                <h5>Course Name</h5>
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control mt-3"
                                                                    id="exampleInputUsername2" 
                                                                    placeholder="Course Name" required>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                          </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div> -->
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12 mt-3 d-flex align-items-stretch">


                        <div class="card w-100">
                            <div class="card-body p-4 rounded">

                                <div class="table-responsive">
                                    <table class="table table-bordered w-100">
                                        <thead class="thead-dark fs-4">
                                            <tr>
                                                <th>
                                                    Sno.
                                                </th>
                                                <th>
                                                    Course Name
                                                </th>
                                                <th>
                                                    Action
                                                </th>


                                            </tr>
                                       <tbody>
                                        @foreach ($lists as $list)
                                            <tr>
                                                <td>{{$list->id}}</td>
                                                <td>{{$list->course_name}}</td>
                                                <td>
                                                    
                                                    <div class="d-flex align-items-center gap-2">
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-warning">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <a href="./admin-profile.html" aria-expanded="false">
                                                        <button type="button" class="btn btn-success">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </button>
    
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
               

            </div>
        </div>
    </div>
    <script src="{{asset("libs/jquery/dist/jquery.min.js")}}"></script>
    <script src="{{asset("libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("js/sidebarmenu.js")}}"></script>
    <script src="{{asset("js/app.min.js")}}"></script>
    <!-- <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script> -->
    <script src="{{asset("libs/simplebar/dist/simplebar.js")}}"></script>
    <script src="{{asset("js/dashboard.js")}}"></script>
</body>

</html>