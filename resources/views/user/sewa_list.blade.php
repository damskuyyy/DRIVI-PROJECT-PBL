@extends('user.component.main')
@section('content')
<!-- Masthead-->
<header class="masthead bg-white text- dark text-center">
            <div>
            <p class="masthead-subheading font-weight-light mb-0">Daftar Sewa Mobil</p>
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
                    
                    @foreach($users as $key=> $transaction)
                        
                        {{-- Booking --}}
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user_id->name}}</td>
                            <td>{{$transaction->nama_mobil}}</td>
                            {{--<td>{{$transaction->nama_mobil}}</td>--}}
                            <td>{{$transaction->tanggal_transaksi}}</td>
                            <td>{{$transaction->tanggal_sewa}}</td>
                            <td>{{$transaction->tanggal_pengembalian}}</td>
                            <td>{{$transaction->metode_pembayaran}}</td>
                            <td>{{$transaction->status_pengembalian}}</td>
                            <td>{{$transaction->denda}}</td>
                            <td>{{$transaction->status_transaksi}}</td>
                            
                            <td>
                                <a href="{{ url ('user/sewa/edit',$transaction->id)}}" class="btn btn-dark mb-1" metho>Ubah Jadwal Sewa</a>
                                <a href="{{ url ('user/sewa/delete',$transaction->id)}}" class="btn btn-danger" onclick="return confirm('Yakin ingin membatalkan pesanan?');" metho>Batalkan Pesanan</a>
                            </td>
                        </tr>
                        @endforeach

                    {{-- Disetujui --}}
                    @foreach($users1 as $key=> $transaction)
                        
                        
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user_id->name}}</td>
                            <td>{{$transaction->nama_mobil}}</td>
                            {{--<td>{{$transaction->nama_mobil}}</td>--}}
                            <td>{{$transaction->tanggal_transaksi}}</td>
                            <td>{{$transaction->tanggal_sewa}}</td>
                            <td>{{$transaction->tanggal_pengembalian}}</td>
                            <td>{{$transaction->metode_pembayaran}}</td>
                            <td>{{$transaction->status_pengembalian}}</td>
                            <td>{{$transaction->denda}}</td>
                            <td>{{$transaction->status_transaksi}}</td>
                            
                            <td>
                                <a href="#" class="btn btn-success m-1">Accepted</a>
                            </td>
                        </tr>
                        @endforeach

                        {{-- Ditolak --}}
                    @foreach($users3 as $key=> $transaction)
                        
                        
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$user_id->name}}</td>
                        <td>{{$transaction->nama_mobil}}</td>
                        {{--<td>{{$transaction->nama_mobil}}</td>--}}
                        <td>{{$transaction->tanggal_transaksi}}</td>
                        <td>{{$transaction->tanggal_sewa}}</td>
                        <td>{{$transaction->tanggal_pengembalian}}</td>
                        <td>{{$transaction->metode_pembayaran}}</td>
                        <td>{{$transaction->status_pengembalian}}</td>
                        <td>{{$transaction->denda}}</td>
                        <td>{{$transaction->status_transaksi}}</td>
                        
                        <td>
                            <a href="#" class="btn btn-danger m-1">Denied</a>
                        </td>
                    </tr>
                    @endforeach
                    
                        {{-- Selesai --}}
                    @foreach($users2 as $key=> $transaction)
                        
                        
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user_id->name}}</td>
                            <td>{{$transaction->nama_mobil}}</td>
                            {{--<td>{{$transaction->nama_mobil}}</td>--}}
                            <td>{{$transaction->tanggal_transaksi}}</td>
                            <td>{{$transaction->tanggal_sewa}}</td>
                            <td>{{$transaction->tanggal_pengembalian}}</td>
                            <td>{{$transaction->metode_pembayaran}}</td>
                            <td>{{$transaction->status_pengembalian}}</td>
                            <td>{{$transaction->denda}}</td>
                            <td>{{$transaction->status_transaksi}}</td>
                            
                            <td>
                                <a href="{{url('user/add')}}" class="btn btn-primary m-1" metho>Beri Ulasan</a>
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