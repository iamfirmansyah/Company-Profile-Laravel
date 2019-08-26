@extends('layouts.argon')
@section('title','Dashboard | Team')
@section('content')
   <div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            </div>
        </div>
    </div>
    
<div class="container-fluid mt--7">
    <label for=""><h1>Mindstores Team</h1></label>
    <div  iv class="row">
        <div class="col-md-4">
                <form action="{{ route('search-team') }}" id="form" method="GET">
                <div class="form-group mb-0 border" style="border-radius:5rem;">
                    <div class="input-group input-group-alternative" style=" border-color:#e4e4e4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search " style="color:#7f7f7f"></i></span>
                        </div>
                        <input class="form-control" id="keyword" autocomplete="off" name="keyword" placeholder="Search Name..." type="text">
                    </div>
                </div>                    
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" name="division" id="division" style="border-radius: 1.375rem;" id="exampleFormControlSelect1">
                        <option selected value="'--' or 1=1">Division</option>
                        @foreach ($divisions as $division)
                        <option value="{{ $division->division }}">{{ $division->division }}</option>
                        @endforeach
                </select> 
           </div>
      </div>
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" name="location" id="location" style="border-radius: 1.375rem;" id="exampleFormControlSelect1">
                    <option selected  value="'--' or 1=1">Location</option>
                    @foreach ($locations as $location)
                    <option value="{{ $location->location }}">{{ $location->location }}</option>     
                    @endforeach
                </select> 
           </div>
      </div>
    </form>
    <div class="col-md-2 offset-2">
            <a href="{{ url('/admin/create/team') }}" style="float:right; border-radius:1.375rem; border:none; " class="btn btn-danger bg-yellow">ADD MEMBER</a>
    </div>
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
    </div>

<div class="row">
    <?php $a = 5 ?>
    @foreach ($teams as $team)
    <div class="col-md-12 card m-1 shadow--hover"><br> 
        <div class="row ">  
        <div class="col-md-1">  
            <img src="{{asset('public/upload/images/team/'.$team->foto)}}" class="user" style="border-radius:1rem" width="100%" alt="">
        </div> 
        <div class="col-md-6">  
        <h2>{{ $team->full_name }}</h2>  
            <p class="p" >{{$team->job_name}} | {{$team->division}} | {{$team->location}}</p>
            <p class="p">{{$team->email}} | {{$team->phone}} </p>
        </div>
        <div class="col-md-3 offset-2  text-center" >
                <div class="row d-flex  flex-row-reverse">
                    <a href="{{ route('delete-member',  $team->id) }}" class="delete-team mb-0 "><button type="button"  rel="tooltip" title="Remove" class="btn btn-link btn-md">
                                <i class="text-yellow fas fa-trash-alt "></i>
                              </button></a>
                        <a href="{{ route('edit-member',$team->id) }}" class="mb-0">
                                <button type="button"  rel="tooltip" title="Edit" class="btn btn-link btn-md">
                                    <i class="text-yellow fas fa-pen "></i>
                                </button>
                            </a>                                   
                        </div>

            <!-- SOSMED -->
            <br>
            <div class="">                    
                        <a href="https://{{$team->github}}" target="_blank" class="{{$team->github == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                            <i class="fab fa-github text-yellow"></i>
                        </a>
            
                        <a href="https://{{$team->dribbble}}" target="_blank" class="{{$team->dribbble == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                            <i class="fab fa-dribbble text-yellow"></i>
                        </a>
            
                        <a href="https://{{$team->twitter}}" target="_blank" class="{{$team->twitter == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                            <i class="fab fa-twitter text-yellow"></i>
                        </a>
            
                        <a href="https://{{$team->instagram}}" target="_blank" class="{{$team->instagram == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                            <i class="fab fa-instagram text-yellow"></i>
                        </a>

                        <a href="https://{{$team->linkedin}}" target="_blank" class="{{$team->linkedin == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                            <i class="fab fa-linkedin-in text-yellow"></i>
                        </a>
                </div>
        </div>
        </div>
    </div>
    <?php $a++; ?>
    @endforeach 
    {!! $teams->render() !!}
</div>

    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        $(document).ready(function () { 
            $('.delete-team').click(function(e){
                e.preventDefault();
                var link_team = $(this).attr('href');
                swal({
                    title:'Are you sure ?',
                    type:'warning',
                    showCancelButton:true,
                    cancelButtonColor:'#d33',
                    confirmButtonColor:'#3085d6'
                }).then((result)=>{
                    if(result.value){
                        window.location.href = link_team;
                        console.log('delete click');
                    }
                });
            });
            
            $('#division').on('change',function(){
                $('#form').submit();
            });
            $('#location').on('change',function(){
                $('#form').submit();
            });
            $('#keyword').on('keyup',function(){
                $('#form').submit();
            });
        });
    </script>
@endpush