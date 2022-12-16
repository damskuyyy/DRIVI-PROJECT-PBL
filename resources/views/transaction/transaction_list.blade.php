@extends('transaction.component.main')

@section('content')

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
    @include('transaction.component.navbar')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Transaksi Anda</h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
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
                                    <a href="" class="btn btn-info" method>Edit</a>
                                    <a href="" id="delete" class="btn btn-danger">Delete</a>
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
                            <th>Status Transaksi</th>
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
                        @foreach($allDataTransaksi as $key => $transaction)
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
                                    <a href="{{ url ('owner/edit', '$transaction->id')}}" class="btn btn-dark" metho>Edit</a>
                                    <a href="" class="btn btn-outline-danger" metho>Hapus</a>
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