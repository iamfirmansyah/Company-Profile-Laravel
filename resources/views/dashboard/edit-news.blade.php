@extends('layouts.argon')
@section('Dashboard | Edit News')
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
       {!! Breadcrumbs::render('editnews',$getNews) !!}
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
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form action="{{ route('update-news',$getNews->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
            <div class="col-md-3" style="padding-left:3%; ">
                <label for="" class="text-muted">News Category</label>  
                <div class="form-group">
                    <select class="form-control" name="category" style="border-radius: 1.375rem;" id="exampleFormControlSelect1">
                        <option disabled>News Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ ucfirst($category->category) }}</option>
                        @endforeach
                    </select>
                 </div>
             </div>
             <div class="col-md-3" style="padding-left:3%; ">
                    <label for="" class="text-muted">News Releaser</label>  
                    <div class="form-group">
                        <select class="form-control" name="releaser" style="border-radius: 1.375rem;" id="exampleFormControlSelect1">
                            <option disabled>Releaser</option>
                            @foreach ($releasers as $releaser)                        
                            <option value="{{$releaser->id}}">{{ ucfirst($releaser->releaser)}}</option>
                            @endforeach
                        </select>
                     </div>     
                </div> 
        </div>
<div class="row">
    <div class="col-md-12" style="padding-left:3%; "><br>
        <div class="row">
            <div class="col-md-10">
                <label for="" class="text-muted">News Title</label>  <br>
                <div class="form-group">
                <input type="text" name="title" required value="{{ $getNews->title }}" required class="form-control" placeholder="Title">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                <label for="" class="text-muted" style="font-size:14px">Banner Size 960 x 520. Max File size 50MB (JPEG/PNG)</label><br>
                <input type="file" name="foto" id="input-foto" class="form-control">
            <input type="hidden" name="fotoLama" value="{{ $getNews->foto }}">
                <img src="" class="d-none" id="preview-foto" alt="foto" width="300px">
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
            <label for="">News Detail</label>
            <textarea name="news_detail" required id="ckeditor" class="ckeditor" cols="30" rows="10">{{ $getNews->news_detail }}</textarea>
            </div>
        </div>
        <div class="row">
                <div class="col-md-10">
                    <label for="" class="">Writer</label>  <br>
                    <div class="form-group">
                    <input type="text" name="writer" value="{{ $getNews->writer }}" required class="form-control" placeholder="Title">
                    </div>
                </div>
            </div>
        <br>
        <div class="row">
                <div class="col-md-6 mx-auto">
                    <input type="submit" class="btn btn-warning" value="Update ">
                    <a href="{{ url('/admin/news') }}"class="btn btn-danger">CANCEL</a>
                </div>
            </div>
    </div>
</div>
</form>


    @include('layouts.footers.auth')
</div>
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush