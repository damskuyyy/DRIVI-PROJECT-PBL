<!DOCTYPE html>
<html lang="en">
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
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}" />

    {{-- bootstrap --}}
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="./index.html">Start Menyewa</a>
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
              <a class="nav-link active" href="./index.html">Home</a>
            </li>
          </li class="nav-item" class="nav-link">
          <a href="{{ url('/login')}}"><button type="button" class="btn btn-outline-dark" >LOGIN DISINI</button></a>
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
        <div
          class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
        >
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-warning text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tidak Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.200.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Manual</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.200.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Manual</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Special Item</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.200.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Bahan bakar</span>
                      <span style="font-weight: 600">Bensin</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Jumlah Kursi</span>
                      <span style="font-weight: 600">5</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Transmisi</span>
                      <span style="font-weight: 600">Manual</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="./detail.html"
                    >Detail</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
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
  </body>
</html>
