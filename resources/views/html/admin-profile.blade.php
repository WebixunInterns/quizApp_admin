<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png" href="{{asset("images/logos/logo.png")}}" />
  <link rel="stylesheet" href="{{asset("css/styles.min.css")}}" />
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
                                  <a href=""
                                      class="d-flex align-items-center gap-2 dropdown-item">
                                      <i class="ti ti-list-check fs-6"></i>
                                      <p class="mb-0 fs-3">My Task</p>
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

        <div class="card">
          <div class="table-responsive">
            <table class="table table-bordered w-100">
                <thead class="thead-dark fs-4">
                    <tr>
                        
                        <th>
                            Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                           Contact
                        </th>
                        

                    </tr>
                </thead>
                <tbody>
                   <tr>
                  
                     <td>{{$data->admin_name}}</td>
                     <td>{{$data->email}}</td>
                     <td>{{$data->contact}}</td>
                    
                   
                   </tr>
                  
                </tbody>
            </table>
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