@extends('user.component.main')

@section('content')
   <!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="#">Selamat dan Mulai Menyewa</a>
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
          <a class="nav-link" href="{{url('user/contact')}}">Contact</a>
        </li>
        <a
                class="btn btn-dark mt-auto text-white"
                href="{{route('user.review_mobil')}}"
                >Review Mobil</a>
            </div>
        {{-- </li class="nav-item" class="nav-link">
        <a href="{{ url('/login')}}"><button type="button" class="btn btn-outline-dark" >LOGIN DISINI</button></a>
        </li> --}}
        {{-- <li class="nav-item" href="{{ ('admin.auth.register')}}">
        <button type="button" class="btn btn-outline-dark">Register</button>
        </li> --}}
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
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
<!-- <header class="bg-dark py-5">
  <div class="container px-4 px-lg-5 my-5">
    <div class="text-center text-white">
      <h1 class="display-4 fw-bolder">Hasil Review Mobil</h1>
      <p>
       Kepuasan Anda Adalah Kepuasan Dari Kami Juga
      </p>
    </div>
  </div>
</header> -->
<!-- Section-->
<!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Hasil Review Mobil</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Detail User</th>
                            <th>ID Mobil</th>
                            <th>Bintang</th>
                            <th>Komentar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tr>
                       <td>1</td>
                       <td>505</td>
                       <td>212</td>
                       <td>5</td>
                       <td>KECE ABIEZZZ</td>
                       <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" id="delete" class="btn btn-danger">Delete</a>
                        
                       </td>
                    </tr>
                    <div class="box">
                    <div class="box-header with-border">
                    <a href= "#" style="float:left;" type="button" class="btn btn-rounded btn-dark mb-5">Tambah Review</a>
                    </div>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection



