@extends('owner.component.main')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('owner.component.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Mobil</h6>
                </div>
                <div class="card-body">

                <form class="row g-3" method="POST" action="{{route('owner.mobilStore')}}" enctype="multipart/form-data">
                  @csrf
                    {{-- <div class="col-md-6">
                      <label for="user_id" class="form-label">User Id</label>
                      <input type="text" class="form-control disabled" id="user_id" name="user_id" value="{{$user_id->id}}" readonly>
                    </div> --}}
                    <div class="col-md-6">
                      <label for="nama_mobil" class="form-label">Nama Mobil</label>
                      <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" required data-validation-required-message="Tidak boleh kosong" >
                    </div>
                    <div class="col-md-6">
                      <label for="jenis_mobil" class="form-label">Jenis Mobil</label>
                      <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil" required data-validation-required-message="Tidak boleh kosong">
                    </div>
                    <div class="col-md-6 pt-4">
                        <label for="harga" class="form-label" >Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                            <input type="text" class="form-control" id="harga" name="harga" aria-describedby="basic-addon1" required data-validation-required-message="Tidak boleh kosong">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                      <label for="jumlah_kursi" class="form-label">Jumlah Kursi</label>
                      <input type="text" class="form-control" id="jumlah_kursi" name="jumlah_kursi" required data-validation-required-message="Tidak boleh kosong">
                    </div>
                    <div class="col-md-6 pt-4">
                      {{-- <label for="bahanBakar" class="form-label">Bahan Bakar</label> --}}
                      {{-- <input type="text" class="form-control" id="bahanBakar" name="bahanBakar" required data-validation-required-message="This field is required"> --}}
                      <div class="form-group">
                        <label for="bahan_bakar">Bahan Bakar</label>
                        <select class="form-control" id="bahan_bakar" name="bahan_bakar">
                            <option selected>Pilih Bahan Bakar</option>
                            <option value="Bensin">Bensin</option>
                            <option value="Solar">Solar</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <label for="jenis_transmisi">Jenis Transmisi</label>
                            <select class="form-control" id="jenis_transmisi" name="jenis_transmisi">
                                <option selected>Pilih Jenis Transmisi</option>
                                <option value="Matic">Matic</option>
                                <option value="Manual">Manual</option>
                                <option value="Manual & Matic">Manual & Matic</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-12 pt-4">
                      <label for="deskripsi" class="form-label">Deskripsi Mobil</label>
                      <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required data-validation-required-message="Tidak boleh kosong" placeholder="Tulis Deskripsi Mobil"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="photo" class="form-label">Pilih Foto Mobil</label>
                      <input class="form-control" type="file" id="photo" name="photo">
                    </div>
                    
                    <div class="col-12 pt-4">
                      <button type="submit" class="btn btn-dark col-12" required data-validation-required-message="Tidak boleh kosong">Tambahkan</button>
                    </div>
                  </form>




              <!-- Content Row -->
        </div>
    </div>
        </div>

            <!-- /.container-fluid -->

@endsection
