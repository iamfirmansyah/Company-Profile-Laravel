@extends('layouts.argon')
@section('title','Dashboard | Edit Admin')
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
      {!! Breadcrumbs::render('editadmin',$getAdmin) !!}
    </div>
</div>
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

<form action="{{ route('update-admin',$getAdmin->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-md-10">
        <p class="text-muted">Full Name</p>
    <input type="text" class="form-control" required value="{{ $getAdmin->name }}" name="name" style="border-radius: 1rem;" placeholder="Full Name"><br>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <p class="text-muted">Email</p>
    <input type="email" class="form-control" required value="{{ $getAdmin->email }}" name="email" style="border-radius: 1rem;" placeholder="Email"><br>
    </div>
</div>
{{-- <div class="row">
    <div class="col-md-10">
        <p class="text-muted">Password</p>
        <div class="form-group mb-0">
                <div class="input-group">
                <input type="password" value="{{ ($getAdmin->password) }}" id="password" name="password" class="form-control" data-toggle="password" placeholder="Password">

                </div>
            </div>
    </div>
</div> --}}
<div class="row">
    <div class="col-md-12">
        <br>   
        <div class="row">
            <div class="col-md-4 form-group">
                <p class="text-muted" style="font-size: 16px;">Upload Member Image</p>
                <p class="text-muted font-italic"  style="font-size: 14px;">Banner Size 425x600. Max File size 50MB (JPEG/PNG)</p>    
                <input type="file" name="image" id="input-foto"  class="btn btn-danger bg-yellow" style="border-radius: 1.375;border:none;">
                <img src="" class="d-none" id="preview-foto" alt="foto" width="400px">
            <input type="hidden" name="imageLama" value="{{ $getAdmin->image }}">        
            </div>
        </div> 
    </div>
</div>
<div class="row">
        <div class="col-md-6 mx-auto">
            <input type="submit" class="btn btn-warning" style="border-radius:50px" value="Update ">
            <a href="{{ url('/set/admin') }}" style="border-radius:50px" class="btn btn-danger">CANCEL</a>
        </div>
</div>
</form>

<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
    <script>
        	$("#password").password('toggle');
    </script>
@endpush

    