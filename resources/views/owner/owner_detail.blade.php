<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('page/css/user_detail.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$data->name}}</span><span class="text-black-50">{{$data->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Owner Detail</h4>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="nama" value="{{$data->name}}"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email" value="{{$data->email}}"></div>
                    <div class="col-md-12"><label class="labels">No Telepon</label><input type="text" class="form-control" placeholder="No telepon" value="{{$data->ownerdetail->no_telpon}}"></div>
                    <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="Alamat" value="{{$data->ownerdetail->alamat}}"></div>
                    <div class="col-md-12"><label class="labels">Nama Perusahaan</label><input type="text" class="form-control" placeholder="nama perusahaan" value="{{$data->ownerdetail->nama_perusahaan}}"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
</body>
</html>