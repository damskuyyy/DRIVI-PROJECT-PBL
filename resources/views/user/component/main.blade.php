<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental Mobil - Laravel</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset ('frontend/assets/favicon.ico')}}" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset ('backend.jquery.rateyo.css')}}"/>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
     <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}" />
=======
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Website | Draivi</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('page/assets/favicon.ico')}}"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('page/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <img src="{{asset('img/logo_draivi.png')}}" style="height: 80px"/>
                <a class="navbar-brand" href="#page-top">Draivi</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('user/home')}}">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('user/contact')}}">Contact</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('user/sewa/list')}}">Daftar Sewa</a></li>
                        {{--<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('user/review')}}">Review Mobil</a></li>--}}
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('/logout')}}">Logout</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#"><span class="mr-2 d-none d-lg-inline text-gray-600 small">nama role{{--$namaowner->name--}}</span>
                            <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
                        </a></li>
>>>>>>> origin/transaksi


<<<<<<< HEAD
   </head>
    <body>
      <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#">Draivi - Rental Cars</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('user/home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('user/contact')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('user/sewa/list')}}">Daftar Sewa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('user/read')}}">Review Mobil</a>
            </li>
            {{-- </li class="nav-item" class="nav-link">
            <a href="{{ url('/login')}}"><button type="button" class="btn btn-outline-dark" >LOGIN DISINI</button></a>
            </li> --}}
            {{-- <li class="nav-item" href="{{ ('admin.auth.register')}}">
            <button type="button" class="btn btn-outline-dark">Register</button>
            </li> --}}
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">nama role{{--$namauser->name--}}</span>
                  <img class="img-profile rounded-circle"
                      src="img/undraw_profile.svg">
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
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{('/logout')}}" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                  </a>
              </div>
          </li>
          </ul>
        </div>
      </div>
    </nav>
       <!-- Header-->
       <header class="bg-dark py-2">
      <div class="container px-1 px-lg-2 my-2">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Sewa Mobil</h1>
          <p>
           Draivi Menyediakan Untuk Anda Jasa Sewa Mobil Terpercaya
          </p>
        </div>
      </div>
    </header>
=======
                      </ul>
                </div>
            </div>
        </nav>
>>>>>>> origin/transaksi

      @yield('content')   
    
    </body>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Based Banyuwangi Sunrise Of Java
                            <br />
                        Group 2 Presesnt
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Draivi</h4>
                        <p class="lead mb-0">
                            Draivi adalah sebuah website rental mobil sebagai project akhir semester 3
                        </p>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Novan Erdi Faqihul Fita Aghis</small></div>
        </div>
<<<<<<< HEAD
    </div>


    <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">
            Copyright &copy; Your Website 2022
          </p>
        </div>
      </footer>
      <!-- Bootstrap core JS-->
      <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
      <!-- Core theme JS-->
      <script src="{{asset('frontend/js/scripts.js')}}"></script>

      <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('backend/js/demo/chart-pie-demo.js')}}"></script>

    <!-- Page Rate -->
    <script src="{{asset ('backend/jquery.js') }}"></script>
    <script src="{{asset ('backens/jquery.rateyo.js') }}"></script>


=======
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('page/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
>>>>>>> origin/transaksi
    </body>
</html>
