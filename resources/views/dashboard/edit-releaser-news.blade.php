@extends('layouts.argon')
@section('title','Dashboard | Edit News Releaser')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            </div>
        </div>
    </div>     
<div class="container-fluid mt--8">
<div class="row">
    <div class="col-md-12">
       {!! Breadcrumbs::render('editreleaser',$getReleaser) !!}
    </div>    
</div>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach    
@endif
@if (session('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('warning') }}
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('success'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('pesan') }}
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form action="{{ route('update-releaser',$getReleaser->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4" style="padding-left:3%; ">
            <label for="" class="">Releaser Name</label>  <br>
            <div class="form-group">
            <input type="text" name="releaser" required value="{{ $getReleaser->releaser }}" class="form-control" placeholder="Releaser Name">
            </div>
        </div>
        <div class="col-md-4">
                <label for="">Logo Releaser</label>
                <input type="file" name="foto" class="form-control" id="input-foto">
                <input type="hidden" name="fotoLama" value="{{ $getReleaser->foto }}">
            </div>
            <div class="col-md-4">
                <img src="" class="d-none" id="preview-foto" alt="foto" width="200px">
            </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <input type="submit" class="btn btn-warning" value="SUBMIT ">
            <a href="{{ url('/admin/news/releaser') }}"class="btn btn-danger">CANCEL</a>
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
       
    </script>
@endpush