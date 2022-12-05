@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Kendaraan</h3>
                  <a href="{{route('kendaraan.add')}}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Kendaraan</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nomor Plat</th>
								<th>Nama Kendaraan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($allDataKendaraan as $key => $kendaraan)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$kendaraan->nomorPlat}}</td>
								<td>{{$kendaraan->namaKendaraan}}</td>
								<td>
                                 
                                    <a href="" class="btn btn-info" method>Edit</a>
                                    <a href="" id="delete" class="btn btn-danger">Delete</a>
                                </td>
							</tr>
                            @endforeach
						</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>




@endsection

 <!-- Vendor JS -->
	<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/data-table.js')}}"></script>