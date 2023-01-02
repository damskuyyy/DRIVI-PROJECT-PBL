@extends('user.component.main')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

      <div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
      For more information about DataTables, please visit the <a target="_blank"
          href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTables Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tabel Hasil Review Mobil</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <div class="box">
                  <div class="box-header with-border">
                  <a href= "{{route('user.add_review_mobil')}}" style="float:left;" type="button" class="btn btn-rounded btn-dark mb-5">Tambah Review</a>
                  </div>
                      <tr>
                          <th>No</th>
                          <th>ID Detail User</th>
                          <th>ID Mobil</th>
                          <th>Bintang</th>
                          <th>Komentar</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach($allDataReview as $key => $review)
                  <tr>
                     <td>{{ $key+1 }}</td>
                     <td>{{ $review->id_detail_user }}</td>
                     <td>{{ $review->id_mobil }}</td>
                     <td>{{ $review->bintang }}</td>
                     <td>{{ $review->komentar }}</td>
                     <td>
                      <a href="#" class="btn btn-info">Edit</a>
                      <a href="{{ route('review.delete', $review->id) }}" id="delete" class="btn btn-danger">Delete</a>
                     </td>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
@endsection



