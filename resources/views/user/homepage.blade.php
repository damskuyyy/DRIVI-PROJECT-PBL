    @extends('user.component.main')

    @section('content')
       <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#">Start Menyewa</a>
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
    <header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Sewa Mobil</h1>
          <p class="lead fw-normal text-white-50 mb-0">
            hanya dengan satu sentuhan
          </p>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center mb-5">Daftar Mobil</h3>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

          
          @foreach ($allDataMobil as $key => $mobil)
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div class="badge badge-custom bg-warning text-white position-absolute" style="top: 0; right: 0">
                Tidak Tersedia
              </div>
              <!-- Product image-->
             @if ($mobil->mobil_photo_path != '')
             <img
             class="card-img-top" style="height: 200px; width 350px; object-fit: cover" src="{{ asset ('storage/mobil/'.$mobil->mobil_photo_path)}}" alt="..."/>
             
             @else
             <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                 
             @endif
             
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  {{-- {{dd($allDataMobil)}} --}}
                  <!-- Product name-->
                      
                  {{-- <p>{{$key+1}}</p> --}}
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.{{$mobil->harga}}/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">{{$mobil->bahan_bakar}}</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">{{$mobil->jumlah_kursi}}</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmisi</span>
                      <span style="font-weight: 600">{{$mobil->jenis_transmisi}}</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto"  href="https://wa.me/+6282172519703" target="blank">Sewa</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="{{route('user.detail')}}"
                    >Detail</a
                  >
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section> 
    @endsection
