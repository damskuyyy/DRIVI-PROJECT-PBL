<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('backend/images/favicon.ico')}}">

    <title>Sunny Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('backend/css/vendors_css.css')}}">
	  
	<!-- Style-->  

	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

  @include('admin.body.header')
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('admin')
  <!-- /.content-wrapper -->
  @include('admin.body.footer')

  <!-- Control Sidebar -->
  @include('admin.body.sidebar_control')
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="{{asset('backend/js/vendors.min.js')}}"></script>
  <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>	
	<script src="{{asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
	
	<!-- Sunny Admin App -->
	<script src="{{asset('backend/js/template.js')}}"></script>
	<script src="{{asset('backend/js/pages/dashboard.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>

  <!-- Vendor JS -->
	<!-- <script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/data-table.js')}}"></script> -->

  

  
	
	
</body>
<script>
   $(function(){
    $(document).on('click','#delete', function(e){
       e.preventDefault();
       var link=$(this).attr("href");
       const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Apakah yakin untuk menghapus?',
          text: "Data yang di hapus tidak dapat dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, hapus!',
          cancelButtonText: 'Tidak, batal!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href=link
            swalWithBootstrapButtons.fire(
              'Terhapus!',
              'Data berhasil dihapus!',
              'success'
            )
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Dibatalkan',
              'Data tidak jadi dihapus',
              'error'
            )
          }
        })
    });
   });
  </script>
</html>
