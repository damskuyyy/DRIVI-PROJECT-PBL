
@extends('user.component.main')

@section('content')
  
    <!-- Header-->
    <header class="bg-dark py-2">
      <div class="container px-1 px-lg-2 my-2">
        <div class="text-center text-white">
          <h1 class="display-10 fw-bolder">Detail Mobil</h1>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 mb-5">
            <div class="card h-100">
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div>
                  <!-- Product name-->
                  <h3 class="fw-bolder text-primary">Deskripsi</h3>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Ipsa dolor corrupti porro, sit ex nemo itaque, est
                    voluptatum illum dignissimos facilis alias facere rem
                    consequatur?
                  </p>
                  <div class="mobil-info-list border-top pt-4">
                    <ul class="list-unstyled">
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>P3K</span>
                      </li>
                      <li>
                        <i class="ri-close-circle-line text-secondary"></i>
                        <span>CHARGER</span>
                      </li>
                      <li>
                        <i class="ri-close-circle-line text-secondary"></i>
                        <span>AUDIO</span>
                      </li>
                      <li>
                        <i class="ri-checkbox-circle-line"></i>
                        <span>AC</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card">
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <h5 class="fw-bolder">Special Item</h5>
                    <div class="rent-price mb-3">
                      <span style="font-size: 1rem" class="text-primary"
                        >Rp.200.000/</span
                      >day
                    </div>
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Bahan Bakar</span>
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
                  <a
                    class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                    href="#"
                    style="column-gap: 0.4rem"
                    >Sewa Mobil <i class="ri-whatsapp-line"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 @endsection
