@extends('user.component.main')
@section('content')
<!-- Masthead-->
<header class="masthead bg-dark text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <p class="masthead-subheading font-weight-light mb-10">DRAIVI DIMARI SEWA MOBIL DISINI</p>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Jasa Rental Mobil Solusi Termudah dan Terpecaya di Banyuwangi</p>
            </div>
        </header>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            

            <!-- Begin Page Content -->
            <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tentukan Jadwal Sewa</h6>
                </div>
                <div class="card-body">

                <form class="row g-3" method="POST" action="{{route('user.sewa_mobil')}}" enctype="multipart/form-data">
                  @csrf
                    <div hidden class="col-md-6">
                      <label for="user_id" class="form-label">User Id</label>
                      <input  type="text" class="form-control disabled" id="user_id" name="user_id" value="{{$user_id->id}}" >
                    </div>
                    <div hidden class="col-md-6">
                      <label for="mobil_id" class="form-label">mobil Id</label>
                      <input  type="text" class="form-control" id="mobil_id" name="mobil_id" value="{{$sewaMobil->id}}" required data-validation-required-message="Tidak boleh kosong" >
                    </div>
                    <div class="col-md-6">
                      <label for="nama_mobil" class="form-label">Nama Mobil</label>
                      <input  readonly type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="{{$sewaMobil->nama_mobil}}" required data-validation-required-message="Tidak boleh kosong" >
                    </div>
                    <div class="col-md-6">
                      <label for="jenis_mobil" class="form-label">Jenis Mobil</label>
                      <input readonly type="text" class="form-control" id="jenis_mobil" name="jenis_mobil" value="{{$sewaMobil->jenis_mobil}}" required data-validation-required-message="Tidak boleh kosong">
                    </div>

                    <div class="col-md-6 pt-4">
                        <label for="tanggal_sewa" class="form-label" >Tanggal Sewa</label>
                        <div class="input-group mb-3">
                            <input type="datetime-local" class="form-control" id="tanggal_sewa" name="tanggal_sewa" aria-describedby="basic-addon1" required data-validation-required-message="Tidak boleh kosong">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                      <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                      <input type="datetime-local" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" required data-validation-required-message="Tidak boleh kosong">
                    </div>
                   
                    
                    <div class="col-12 pt-4">
                      <button type="submit" class="btn btn-dark col-12" required data-validation-required-message="Tidak boleh kosong">Sewa Mobil</button>
                    </div>
                  </form>




              <!-- Content Row -->
        </div>
    </div>
        </div>

            <!-- /.container-fluid -->
@endsection