<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Register</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-login-form.min.css" />
  <link rel="shortcut icon" type="image/png" href="{{asset("images/logos/logo-w.png")}}" />
  <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
</head>

<body>
  <!-- Start your project here-->

  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
            alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{url("admin-register")}}" method="POST">
            @csrf
            @if(Session::has('success'))
            {{Session::get('success')}}
            @endif


            @if(Session::has('fail'))
            {{Session::get('fail')}}
            @endif

            <a class="text-nowrap logo-img text-center d-block py-3 w-100">
              <img src="{{asset("images/logos/logo.png")}}" width="200" alt="" class="mb-9">
            </a>

            {{-- Amdin Name  --}}
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Admin Name</label>
              <input type="text"  id="form3Example3" class="form-control form-control-lg"
              name="admin_name" placeholder="Email " required />
              
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Email</label>
              <input type="email"  id="form3Example3" class="form-control form-control-lg"
              name="email"
                placeholder="Email " required />
              
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">Password</label>
              <input type="password" id="form3Example4" class="form-control form-control-lg" name="password"
                placeholder="Enter password" required />
              
            </div>

            {{-- Contact  --}}

            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">Contact</label>
              <input type="number" id="form3Example4" class="form-control form-control-lg" name="contact"
                placeholder="Enter contact number" required />
              
            </div> 

            {{-- College Id  --}}

            
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">College Id</label>
              <input type="number" id="form3Example4" class="form-control form-control-lg" name="college_id"
                placeholder="Enter college Id" required />
              
            </div> 

            <div class="text-center text-lg-start mt-4 pt-2">
              {{-- <a href="" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login </a> --}}
              <button type="submit" class="btn btn-primary w-100 py-8 fs-4  rounded-2">Register</button>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <a href="{{url("login")}}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</a>
            </div>

          </form>
        </div>
      </div>
    </div>
    
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="{{asset("js/mdb.min.js")}}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
  <script src="{{asset("libs/jquery/dist/jquery.min.js")}}"></script>
  <script src="{{asset("libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
  

</body>

</html>