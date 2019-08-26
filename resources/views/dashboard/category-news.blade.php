@extends('layouts.argon')
@section('title','Dashboard | News Category')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            </div>
        </div>
    </div>  
    <div class="container-fluid mt--7">
            <h1>News Category</h1>
        <div class="row">
            <div class="col-md-2 ml-auto">
                    <a href="{{url('admin/create/news/category')}}" style="float:right; border-radius:1.375rem; border:none; " class="btn btn-danger bg-yellow">ADD NEWS CATEGORY</a>
                    </div>    
            <div class="col-md-12">
                &nbsp;
                @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning alert-dismissible fade show">
                            {{ session('warning') }}
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    <div class="row m-1">
                            <div class="col">
                              @foreach ($categs as $categ)     
                                <div class="card m-1 shadow--hover">                    
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                            <h3 class="mb-0">{{ucfirst($categ->category)}}</h3>
                                            <h4 class="mt-3 text-muted">id : {{$categ->id}}</h4>
                                            </div>
                                            <div class="col-4">
                                                <div class="row d-flex  flex-row-reverse">
                                                        <a href="{{ route('delete-category-news',$categ->id) }}" class="btn btn-link btn-hapus">
                                                                <i class="fas fa-trash-alt text-yellow"></i>
                                                            </a>
                                                    <a href="{{ route('edit-category-news',$categ->id) }}" class="btn btn-link" style="padding-right:10%;">
                                                            <i class="fas fa-pen text-yellow"></i>
                                                        </a>
                                                </div>
                                                <div class="row float-right">
                                            </div>
                                            </div>
                                            </div>
                                    </div>          
                            </div>
                            @endforeach
                            {!! $categs->render() !!}
                        </div>
                    </div>
                        
            </div>
            </div>
            


            @include('layouts.footers.auth')
    </div>
    
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        Waves.attach('.btn');
        Waves.init();
        $('.btn-hapus').click(function(e){
            e.preventDefault();
            var link_news = $(this).attr('href');
            swal({
                title:'Are you sure?',
                type:'warning',
                showCancelButton:true,
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
            }).then((result)=>{
                if(result.value){
                    window.location.href = link_news;
                    console.log('Button delete clicked');
                }
            })
        });
    </script>
@endpush
<style>
.radius{
    border-radius: 1.375rem;
}
.p{ 
    font-size:14px;font-weight:600;font-family:Avenir-Heavy;color: #9B9B9B;
}</style>