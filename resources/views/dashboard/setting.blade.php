@extends('layouts.argon')
@section('title','Dashboard | Setting')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            </div>
        </div>
    </div>
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-md-12">
                    @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                @endforeach
                @endif
                @if (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('warning') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
    <label for=""><h1>Setting</h1></label>
    <p class="p"><strong>Edit My Account</strong></p>
    <p class="p">Upload Member Image</p>
    <p class="p font-italic">Image Size 425x600. Max File size 50MB (JPEG/PNG)</p>
</div>
</div>
<form action="{{ route('update-setting',$getProfile->name) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-2">
        <input type="hidden" name="imageLama" value="{{ $getProfile->image }}">
            <img src="{{asset('public/upload/images/adminProfile/'.$getProfile->image)}}" id="preview-foto" class="" width="100px" height="100px" style="border-radius:50% !important" alt=""><br><br>
             <input type="file" style="border-radius:1.375rem; border:none;" id="input-foto" class="btn btn-warning bg-yellow text-center" name="image">
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <br>
            <label for="" class="p">Full Name</label>
            <input type="text" name="name" value="{{ $getProfile->name }}" class="form-control" placeholder="Adriel Aritonang">
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <br>
            <label for="" class="p">Email</label>
            <input type="text" readonly value="{{ $getProfile->email }}" name="email" class="form-control">
        </div>
    </div>
    <br>
    <div class="row d-none" id="old_password">
        <div class="col-md-10">
        <div class="form-group mb-0">
            <label class="text-muted">Old Password</label>
            <div class="input-group">
                <input type="password" id="password" name="old_password" class="form-control" data-toggle="password" placeholder="Password">    
            </div>
        </div>
        </div>
    </div>
    <br>
    <div class="row d-none" id="new_pass">
        <div class="col-md-10">
        <div class="form-group mb-0">
            <label class="text-muted">New Password</label>
            <div class="input-group">
                <input type="password" id="password" name="new_password" class="new-password form-control" data-toggle="password" placeholder="Password" onclick="checkChangePassword()">
            </div>
        </div>
        </div>
    </div><br>
    <div class="row d-none" id="confirm_pass">
        <div class="col-md-10">
            <div class="form-group mb-0">
                <label class="text-muted">Confirm New Password</label>                
                <input type="password" onkeyup="checkChangePassword()" id="password" name="confirm_new_password" class="form-control confirm_new_password" data-toggle="password" placeholder="Password">        
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <br>
            <button type="submit" id="change" style="border-radius:1.375rem; border:none; " class="btn btn-warning bg-yellow text-center">CHANGE PASSWORD</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <br>
            <button type="submit" id="save" style="border-radius:1.375rem; border:none; " class="d-none btn btn-warning bg-yellow text-center" disabled="true">SAVE PASSWORD</button>
        </div>
        <div class="col-md-2">
            <br>
            <button type="submit" id="cancel" style="border-radius:1.375rem;" class="d-none btn btn-outline btn-outline-danger text-center">CANCEL</button>
        </div>
    </div>
    <div class="row">
        <div class="offset-4 col-md-6">
          <br>
          <input type="submit" style="border-radius:1.375rem; border:none;" class="btn btn-warning bg-yellow text-center" value="Save Changes">
        </div>
    </div>
</form>

    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        // $('#password').toggle('password')
        $('#change').click(function(e){
            e.preventDefault();
            $('#new_pass').removeClass('d-none');
            $('#confirm_pass').removeClass('d-none');
            $(this).addClass('d-none');
            $('#save').removeClass('d-none');
            $('#cancel').removeClass('d-none');
            $('#old_password').removeClass('d-none')
        });

        $('#cancel').click(function(e){
            e.preventDefault();
            $('#change').removeClass('d-none');
            $('#new_pass').addClass('d-none');
            $('#confirm_pass').addClass('d-none');
            $('#old_password').addClass('d-none')
            $(this).addClass('d-none');
            $('#save').addClass('d-none');
        });

        function checkChangePassword(){
            if ($('.old-password').val() != '' && $('.new-password').val() != '' && $('.confirm_new_password').val() != '') {
                $('#save').attr('disabled', false);
            } else {
                $('#save').attr('disabled', true);
            }
        }

    </script>
@endpush