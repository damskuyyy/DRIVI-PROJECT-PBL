@extends('user.component.main')

@section('content')
   
<!-- Masthead-->
<header class="masthead bg-dark text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <p class="masthead-subheading font-weight-light mb-10">CONTACT</p>
                </div>
            </div>
        </header>

    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 m-auto">
            <div class="contact-form">
              <form action="index.html">
              <div class="row">
                  <div class="col-lg-12 col-md-6 mb-2">
                    <div class="name-input form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Isikan Nama Lengkap"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-6 mb-2">
                    <div class="subject-input form-group">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Isikan Alamat Email"
                      />
                    </div>
                  </div>
                </div>
                <div class="message-input form-group mb-3">
                  <textarea
                    name="review"
                    cols="30"
                    rows="10"
                    placeholder="Isikan Pesan Anda"
                    class="form-control"
                  ></textarea>
                </div>
                <div class="input-submit form-group">
                  <button
                    type="submit"
                    style="height: 50px; width: 400px; margin: 0 auto"
                    class="d-block btn btn-primary"
                  >
                    Kirim Pesan
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="maparea">
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe
            width="100%"
            height="498"
            id="gmap_canvas"
            src="https://maps.google.com/maps?q=jeringo&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
          ></iframe
          ><a href="https://fmovies-online.net">fmovies</a><br /><style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 498px;
              width: 100%;
            }</style
          ><a href="https://www.embedgooglemap.net"></a
          ><style>
            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 498px;
              width: 100%;
            }
          </style>
        </div>
      </div>
    </div>
    @endsection