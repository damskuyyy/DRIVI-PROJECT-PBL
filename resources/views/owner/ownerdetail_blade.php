@extends('owner.component.main')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('owner.component.navbar')

        <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Hasil Review Mobil</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Detail User</th>
                            <th>ID Mobil</th>
                            <th>Bintang</th>
                            <th>Komentar</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tr>
                       <td>1</td>
                       <td>505</td>
                       <td>212</td>
                       <td>5</td>
                       <td>KECE ABIEZZZ</td>
                       <!-- <td> -->
                        <!-- <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" id="delete" class="btn btn-danger">Delete</a>
                         -->
                       <!-- </td> -->
                    <!-- </tr>
                    <div class="box">
                    <div class="box-header with-border">
                    <a href="#" style="float:left;" type="button" class="btn btn-rounded btn-dark mb-5">Tambah Review</a>
                    </div> -->
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
                 
                {{-- <!-- /.container-fluid -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body> --}}

</html>