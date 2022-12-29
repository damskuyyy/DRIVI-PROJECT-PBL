    @extends('user.component.main')

    @section('content')
    <!-- Masthead-->
    <header class="masthead bg-dark text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <p class="masthead-subheading font-weight-light mb-10">DRAIVI DIMARI SEWA MOBIL DISINI</p>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Jasa Rental Mobil Solusi Termudah dan Terpercaya di Banyuwangi</p>
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
              <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
                Tersedia
              </div>
              <!-- Product image-->
             @if ($mobil->mobil_photo_path != '')
             <img
             class="card-img-top" style="height: 200px; width 350px; object-fit: cover" src="{{ asset ('storage/'.$mobil->mobil_photo_path)}}" alt="..."/>
             
             @else
             <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                 
             @endif
             
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  {{-- {{dd($allDataMobil)}} --}}
                  <!-- Product name-->
                      
                  {{-- <p>{{$key+1}}</p> --}}
                  <h5 class="fw-bolder">{{$mobil->nama_mobil}}</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.{{$mobil->harga}}</span> / Day
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
                  <a class="btn btn-primary mt-auto"  href="{{route('user.sewa_add',$mobil->id)}}" target="blank">Sewa</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="{{route('user.detail',$mobil->id)}}"
                    target="blank">Detail</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section> 
    @endsection
