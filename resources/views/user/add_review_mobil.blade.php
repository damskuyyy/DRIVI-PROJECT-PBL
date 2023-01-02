@extends('user.component.main')

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
                    <h6 class="m-0 font-weight-bold text-primary">Review Mobil</h6>
                </div>
                <div class="card-body">

                <form class="row g-3" method="POST" action="{{route('review.request')}}">
                  @csrf
                     <!-- # -->
                    <div class="col-md-6">
                      <label for="nama_mobil" class="form-label">Id Detail User</label>
                      <input type="text" class="form-control" id="id_detail_user" name="id_detail_user" required data-validation-required-message="Tidak boleh kosong" >
                    </div>
                    <div class="col-md-6">
                      <label for="jenis_mobil" class="form-label">Bintang</label>
                      <input type="text" class="form-control" id="bintang" name="bintang" required data-validation-required-message="Tidak boleh kosong">
                    </div>
                    <div class="col-md-6">
                      <label for="nama_mobil" class="form-label">Id Mobil</label>
                      <input type="text" class="form-control" id="id_mobil" name="id_mobil" required data-validation-required-message="Tidak boleh kosong" >
                    </div>
                    <div class="col-md-12 pt-4">
                      <label for="deskripsi" class="form-label">Komentar</label>
                      <textarea type="text" class="form-control" id="komentar" name="komentar" required data-validation-required-message="Tidak boleh kosong" placeholder="Tulis Komentar Mobil"></textarea>
                    </div>  
                    <div class="col-12 pt-4">
                      <button type="submit" class="btn btn-dark col-12"  >Tambahkan</button>
                    </div>
                  </form>
              <!-- Content Row -->
        </div>
    </div>
        </div>

            <!-- /.container-fluid -->

@endsection