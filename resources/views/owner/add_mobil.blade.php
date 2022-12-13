@extends('owner.component.main')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('owner.component.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="box-header with-border">
                    <h4 class="box-title">Tambah Mobil</h4>
                  </div>

                <form class="row g-3" method="POST" action="{{route('owner.mobilStore')}}">
                  @csrf
                    <div class="col-md-6">
                      <label for="mobil" class="form-label">Nama Mobil</label>
                      <input type="text" class="form-control" id="mobil" name="mobil" required data-validation-required-message="This field is required" >
                    </div>
                    <div class="col-md-6">
                      <label for="jenis" class="form-label">Jenis Mobil</label>
                      <input type="text" class="form-control" id="jenis" name="jenis" required data-validation-required-message="This field is required">
                    </div>
                    <div class="col-md-6 pt-4">
                        <label for="harga" class="form-label" >Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                            <input type="text" class="form-control" id="harga" name="harga" aria-describedby="basic-addon1" required data-validation-required-message="This field is required">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                      <label for="kursi" class="form-label">Jumlah Kursi</label>
                      <input type="text" class="form-control" id="kursi" name="kursi" required data-validation-required-message="This field is required">
                    </div>
                    <div class="col-md-6 pt-4">
                      {{-- <label for="bahanBakar" class="form-label">Bahan Bakar</label> --}}
                      {{-- <input type="text" class="form-control" id="bahanBakar" name="bahanBakar" required data-validation-required-message="This field is required"> --}}
                      <div class="form-group">
                        <label for="bahanBakar">Bahan Bakar</label>
                        <select class="form-control" id="bahanBakar">
                            <option selected>Pilih Bahan Bakar</option>
                            <option value="Bensin">Bensin</option>
                            <option value="Solar">Solar</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <label for="bahanBakar">Jenis Transmisi</label>
                            <select class="form-control" id="bahanBakar">
                                <option selected>Pilih Jenis Transmisi</option>
                                <option value="Matic">Matic</option>
                                <option value="Manual">Manual</option>
                                <option value="Manual & Matic">Manual & Matic</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-12 pt-4">
                      <label for="deskripsi" class="form-label">Deskripsi Mobil</label>
                      <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required data-validation-required-message="This field is required">Tulis Deskripsi Mobil</textarea>
                    </div>
                    
                    <div class="col-12 pt-4">
                      <button type="submit" class="btn btn-dark col-12">Tambahkan</button>
                    </div>
                  </form>




              <!-- Content Row -->
        </div>
    </div>

            <!-- /.container-fluid -->

@endsection
