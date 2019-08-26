@extends('layouts.argon')
@section('title','Dashboard | News')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            </div>
        </div>
    </div>  
    <div class="container-fluid mt--7">
        <h1 class="text-dark">News</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="row " >
                    <div class="col-md-2">
                        <form action="{{ route('search-news') }}" id="form" method="GET">
                        <div class="form-group">
                            <select class="form-control" name="category" id="category" style="border-radius: 1.375rem;">
                                <option selected value="'--' or 1=1">Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ ucfirst($category->category) }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control" name="releaser" id="releaser" style="border-radius: 1.375rem;">
                                <option selected value="'--' or 1=1">Releaser</option>
                                @foreach ($releasers as $releaser)
                                <option value="{{ $releaser->id }}">{{ ucfirst($releaser->releaser) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-2">
                        <form action="{{ route('search-news-date') }}" method="GET" id="form2">
                        <div class="form-group">
                            <input type="date" name="date1" id="date1" class="form-control" style="border-radius:1.375rem;">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="date" name="date2" id="date2" class="form-control" style="border-radius:1.375rem;">
                        </div>
                        </form>
                    </div>
                    <div class="col-md-2" >
                    <a href="{{url('admin/create/news')}}" style="float:right; border-radius:1.375rem; border:none; " class="btn btn-danger bg-yellow">ADD NEWS</a>
                    </div>                    
                </div>
                
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
                    @foreach ($news as $item)  
                <div class="row card m-1 shadow--hover">
                    <div class="col-md-12">
                        <div class="row bg-white pt-5">
                            <div class="col-md-8">
                                <h2>{{$item->title}}</h2>
                                <p class="text-muted">{{ ucfirst($item->category->category) }} | {{ ucfirst($item->releaser->releaser) }} | {{ \Carbon\Carbon::parse($item->created_at)->formatLocalized('%d %B %Y')}} | by {{ ucfirst($item->writer) }}</p>
                            </div>
                            <div class="col-md-2 offset-2 text-center" >
                                <a href="{{ route('edit-news',$item->id) }}" class="btn btn-link" style="padding-right:10%;">
                                    <i class="fas fa-pen text-yellow"></i>
                                </a>
                                
                            <a href="{{ route('delete-news',$item->id) }}" class="btn btn-link btn-hapus">
                                <i class="fas fa-trash-alt text-yellow"></i>
                            </a>
                            </div>
                        </div>
                        <div class="row bg-white pt-2">
                            <div class="col-md-12 text-justify text-muted">
                            <p>{!! str_limit($item->news_detail,200) !!}</p>
                                <p>Total View : {{$item->visit_count}}</p>
                                
                            </div>
                        </div>
                    </div>    
                </div>
                @endforeach
                {!! $news->render() !!}
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
        $('#date').daterangepicker();
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

        $('#category').on('change',function(){
            $('#form').submit();
        });
        $('#releaser').on('change',function(){
            $('#form').submit();
        });
        $('#date2').on('change',function(){
            $('#form2').submit();
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