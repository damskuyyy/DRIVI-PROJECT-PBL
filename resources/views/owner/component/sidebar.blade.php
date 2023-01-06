<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <!-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div> -->
    <div class="sidebar-brand-text mx-3">Draivi Admin <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{url('/owner/dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
<!-- Nav Item - Dashboard -->
<!-- Nav Item - Homepage Sewa -->
{{-- <li class="nav-item active">
    <a class="nav-link" href="{{url('/dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Homepage Sewa</span></a>
</li> --}}

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="bi bi-car-front-fill"></i>
        <span>Mobil</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Mobil:</h6>
            <a class="collapse-item" href="{{ url ('owner/add')}}">Add Mobil</a>
            <a class="collapse-item" href="{{ url ('owner/list')}}">List</a>
            <a class="collapse-item" href="{{ url ('owner/review')}}">Review</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="bi bi-receipt"></i>
        <span>Transaksi</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Transaksi:</h6>
            <a class="collapse-item" href="{{ url ('owner/transaksi/list')}}">Pending</a>
            <a class="collapse-item" href="{{ url ('owner/transaksi/proses')}}">Proses Penyewaan</a>       {{--Buat Controller di Folder Owner sesuai nama fitur--}}
            <a class="collapse-item" href="{{ url ('owner/transaksi/selesai')}}">Selesai</a>    {{--Buat Controller di Folder Owner sesuai nama fitur--}}
        </div>
    </div>
</li>



<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>