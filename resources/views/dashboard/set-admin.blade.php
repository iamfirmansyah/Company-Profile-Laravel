@extends('layouts.argon')
@section('title','Dashboard | Set Admin')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            </div>
        </div>
    </div>
    
<div class="container-fluid mt--7">
    <label for=""><h1><strong>Set Admin</strong></h1></label>
    <div  iv class="row">
        <div class="col-md-6">
        <form action="{{ route('search-admin') }}" method="GET" class="navbar-search form-inline mr-3 d-none d-md-flex" >
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative" style="width:30rem; border-color:#e4e4e4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search " style="color:#7f7f7f"></i></span>
                        </div>
                      <input class="form-control " name="keyword" placeholder="Search..." type="text">
                    </div>
                </div>
            </form>
        </div>
    <div class="col-md-2 offset-4" >
            <a href="{{ route('create-admin-view') }}" style="float:right; border-radius:1.375rem; border:none; " class="btn btn-danger bg-yellow">ADD ADMIN</a>
    </div>
    </div>

    <br>
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
    <br>
@foreach ($data as $item)
<div class="row">   
    <div class="col-md-12 card shadow--hover m-1"><br> 
        <div class="row mb-2">  
        <div class="col-md-1">  
            <img src="{{asset('public/upload/images/adminProfile/'.$item->image)}}" style="border-radius:50%" class="" width="80px" height="80px" alt="">
        </div> 
        <div class="col-md-6">  
        <h2><strong>{{ ucfirst($item->name) }}</strong></h2>  
            @if ($item->role == 'super_admin')
            <p class="text-muted">Super Admin</p>                
            @else
            <p class="text-muted">{{ ucfirst($item->role) }}</p>
            @endif
        </div>
        <div class="col-md-2 offset-3  text-center" >
            <div class="" >
                <a href="{{ route('edit-admin',$item->id) }}" class="btn" style="padding-right:10%;">
                    <i class="fas fa-pen text-yellow"></i>
                </a>
            @if ($item->role == 'super_admin')
                
            @else
            <a href="{{ route('delete-admin',$item->id) }}" class="btn btn-admin">
                <i class="fas fa-trash-alt text-yellow"></i>
            </a>
            @endif
            
            <br>    
            </div>

            <!-- SOSMED -->
        </div>
        </div>
    </div>
</div>
@endforeach

    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        $(document).ready(function(){
            $('.btn-admin').click(function(e){
                e.preventDefault();
                var link_admin = $(this).attr('href');
                swal({
                    title: 'Are you sure? ',
                    type: 'warning',
                    showCancelButton:true,
                    cancelButtonColor:'#d33',
                    confirmButtonColor:'#3085d6'
                }).then((result)=>{
                    if(result.value){
                        window.location.href = link_admin;
                    }
                });
            });
        });
    </script>
@endpush