@extends('user.component.main')
@section('content')
<header class="bg-dark py-2">
      <div class="container px-1 px-lg-2 my-2">
        <div class="text-center text-white">
          <h1 class="display-10 fw-bolder">Sewa Mobil</h1>
          <p class="lead fw-normal text-white-15 mb-0">
            hanya dengan satu sentuhan
          </p>
        </div>
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
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Pesanan</h6>
                </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    {{-- @foreach($allDataTransaksi as $key => $transaction)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$transaction->id_user}}</td>
                            <td>{{$transaction->id_mobil}}</td>
                            <td>{{$transaction->tanggal_transaksi}}</td>
                            <td>{{$transaction->tanggal_sewa}}</td>
                            <td>{{$transaction->tanggal_pengembalian}}</td>
                            <td>{{$transaction->metode_pembayaran}}</td>
                            <td>{{$transaction->status_pengembalian}}</td>
                            <td>{{$transaction->denda}}</td>
                            <td>{{$transaction->status_transaksi}}</td>

                            
                            <td>
                                <a href="" class="btn btn-info" method>Ubah Jadwal Sewa</a>
                            </td>
                        </tr>
                        @endforeach --}}
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Nama Mobil</th>
                        <th>Tanggal Transaksi</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Metode Pembayaran</th>
                        <th>Status Pengembalian</th>
                        <th>Denda</th>
                        <th>Status Pemesanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                {{-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot> --}}
                <tbody>
                       {{-- <!-- @foreach($user->transactionsuser as $key=> $transaction) --> --}} 
                    
                        @foreach($user_id->transactionsuser as $key=> $transaction)
                        
                        
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$transaction->user_id}}</td>
                            <td>{{$transaction->mobil_id}}</td>
                            <td>{{$transaction->tanggal_transaksi}}</td>
                            <td>{{$transaction->tanggal_sewa}}</td>
                            <td>{{$transaction->tanggal_pengembalian}}</td>
                            <td>{{$transaction->metode_pembayaran}}</td>
                            <td>{{$transaction->status_pengembalian}}</td>
                            <td>{{$transaction->denda}}</td>
                            <td>{{$transaction->status_transaksi}}</td>
                            
                            <td>
                                <a href="{{ url ('owner/edit', '$transaction->id')}}" class="btn btn-dark" metho>Ubah Jadwal Sewa</a>
                                <a href="{{ url ('owner/edit', '$transaction->id')}}" class="btn btn-warning" metho>Batalkan Pesanan</a>
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