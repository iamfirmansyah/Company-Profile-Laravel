@extends('layouts.argon')
@section('title','Dashboard | Project')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            </div>
        </div>
    </div>    
<div class="container-fluid mt--7">
    <h1>Projects</h1>
    <div  iv class="row">
        <div class="col-md-8">
                <form action="{{ route('search-project') }}" method="GET">
                    <div class="form-group mb-0 border" style="border-radius:5rem;">
                        <div class="input-group input-group-alternative" style=" border-color:#e4e4e4">
                          <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search " style="color:#7f7f7f"></i></span>
                          </div>
                            <input class="form-control" autocomplete="off" name="keyword" placeholder="Search Project..." type="text">
                        </div>
                    </div>
                </form>
        </div>
        <div class="col-md-4">
        <a href="{{ url('/admin/create/project') }}" style="float:right; border-radius:1.375rem; border:none; " class="btn btn-danger bg-yellow">ADD PROJECT</a>
        </div>
    </div> 
    &nbsp;   
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
    &nbsp;
    @foreach ($projects as $project)
<div class="col-md-12 card shadow--hover m-1">
    <div class="row bg-white pt-5">
            <div class="col-md-8 ">
                <h2>{{$project->title}}</h2>
                <p class="text-muted"> {{ $project->project_name }} | {{ \Carbon\Carbon::parse($project->created_at)->formatLocalized('%d %B %Y')}}</p>
            </div>
            <div class="col-md-2 offset-2 text-center">                
                <a href="{{ route('edit-project',$project->id) }}" class="btn btn-link" >
                    <i class="fas fa-pen text-yellow"></i>
                </a>
            <a href="{{ route('delete-project',$project->id) }}" class="delete-project" style="padding-right:10%;">
                <i class="fas fa-trash-alt text-yellow"></i>
            </a>
            </div>
        </div>
        <div class="row bg-white pt-2">
            <div class="col-md-12 text-justify text-muted">
                <p>Total View : {{$project->visit_count}}</p>
            </div>
        </div>
        </div> 
    @endforeach
    {!! $projects->render() !!}
    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        $(document).ready(function(){
            $('.delete-project').click(function(e){
                e.preventDefault();
                var link_project = $(this).attr('href');
                swal({
                    title: 'Are you sure?',
                    type:'warning',
                    showCancelButton:true,
                    cancelButtonColor:'#d33',
                    confirmButtonColoro:'#3085d6'
                }).then((result)=>{
                    if(result.value){
                        window.location.href= link_project;
                        console.log('delete button clicked');
                    }
                });
            });
        }); 
    </script>
@endpush