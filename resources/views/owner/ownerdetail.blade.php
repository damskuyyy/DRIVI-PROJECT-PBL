@extends('owner.component.main')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('owner.component.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="box-header with-border">
                    <h4 class="box-title">Owner</h4>
                  </div>

                <form class="row g-3" method="post" action="#">
                    @csrf
                    <div hidden class="col-md-6">
                      <fieldset>
                        <label for="id" class="form-label">Id User</label>
                        <input type="text" class="form-control" value="{{$data->id}}" id="id" name="id" required data-validation-required-message="This field is required" placeholder="id">
                      </fieldset>                    
                    </div>
                    <div hidden class="col-md-6">
                      <fieldset>
                        <label for="id" class="form-label">Id Mobil</label>
                        <input type="text" class="form-control" value="{{$data->nama}}" id="nama" name="nama" required data-validation-required-message="This field is required" placeholder="id">
                      </fieldset>                    
                    </div>
                    <div hidden class="col-md-6">
                      <fieldset>
                        <label for="id" class="form-label">Id Mobil</label>
                        <input type="text" class="form-control" value="{{$data->email}}" id="email" name="email" required data-validation-required-message="This field is required" placeholder="id">
                      </fieldset>                    
                    </div>
                    
                                      
                    <div class="col-12 pt-4">
                      <button type="submit" class="btn btn-dark col-12">Simpan Perubahan</button>
                    </div>
                  </form>




              <!-- Content Row -->
        </div>
    </div>

            <!-- /.container-fluid -->

@endsection
