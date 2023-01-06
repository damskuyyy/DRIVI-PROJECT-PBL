@extends('owner.component.main')

@section('content')

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
    @include('owner.component.navbar')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Mobil Anda</h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        {{-- @foreach($allDataMobil as $key => $mobil)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$mobil->nama_mobil}}</td>
								<td>{{$mobil->jenis_mobil}}</td>
								<td>{{$mobil->harga}}</td>
								<td>{{$mobil->jumlah_kursi}}</td>
								<td>{{$mobil->bahan_bakar}}</td>
								<td>{{$mobil->jenis_transmisi}}</td>
								
								<td>
                                    <a href="" class="btn btn-info" metho>Edit</a>
                                    <a href="" id="delete" class="btn btn-danger">Delete</a>
                                </td>
							</tr>
                            @endforeach --}}
                        <tr>
                            <th>No</th>
                            <th>Images</th>
                            <th>Nama Mobil</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Jumlah Kursi</th>
                            <th>Bahan Bakar</th>
                            <th>Transmisi</th>
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
                        @foreach($user->mobils as $key=> $mobil)
							<tr>
								<td>{{$key+1}}</td>
								<td><img src="{{ asset ('storage/'.$mobil->mobil_photo_path)}}" alt="" width="100px"></td>
								<td>{{$mobil->nama_mobil}}</td>
								<td>{{$mobil->jenis_mobil}}</td>
								<td>{{$mobil->harga}}</td>
								<td>{{$mobil->jumlah_kursi}}</td>
								<td>{{$mobil->bahan_bakar}}</td>
								<td>{{$mobil->jenis_transmisi}}</td>
								
								<td>
                                    <a href="{{route('owner.edit_mobil', $mobil->id)}}" class="btn btn-dark">Edit</a>
                                    {{-- <a href="#" class="btn btn-success">Detail</a> --}}
                                    <a href="{{route('owner.mobil_delete', $mobil->id)}}"  class="btn btn-outline-danger" >Hapus</a>
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