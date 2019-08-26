@extends('layouts.argon')
@section('title','Dashboard | Job-list')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <h1>Job-list</h1>
                <!-- Card stats -->
                <div class="row m-1">
                    <div class="col-xl-4 col-lg-6">
                        <form action="{{ route('ajaxSearch.job') }}" method="GET" id="form">
                        <div class="navbar-search form-inline mr-3 d-none d-md-flex" >
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative" style=" border-color:#e4e4e4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-search " style="color:#7f7f7f"></i></span>
                                        </div>
                                        <input class="form-control" name="keyword" id="keyword" placeholder="Search Job..." type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6">
                            <select name="division" class="form-control rounded-pill border form-inline d-md-flex" style="border-radius:50px;" id="division">
                                <option value="'--' or 1=1" selected>Division</option>
                                <option value="Business">Business</option>
                                <option value="Creative">Creative</option>
                                <option value="Programmer">Programmer</option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-6">
                            <select name="location" class="form-control border rounded-pill" style="border-radius:50px;" id="location">
                                <option value="'--' or 1=1" selected>Location</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Yogyakarta">Yogyakarta</option>
                            </select>
                        </div>
                    </form>
                    
                        <div class="col-md-2 ml-auto offset-2">
                            <form action="{{ route('create-job-view') }}">
                            <a href="{{ route('create-job-view') }}" style="float:right; border-radius:1.375rem; border:none; " class="btn btn-warning bg-yellow">ADD JOB</a>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7"  id="hasil">
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
        <tbody>    
            @foreach ($datas as $data)    

            <div class="row m-1 ">
                    <div class="col">
                        <div class="card h-100 shadow--hover">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">{{ $data->job_title }}</h3>
                                        <h4 class="mt-3 text-muted">{{$data->division}} | {{$data->location}}</h4>
                                        <h5 class="mt-3 text-muted">Total View : {{$data->visit_count}}</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="row d-flex  flex-row-reverse">
                                            <a href="{{ route('delete-career',$data->id) }}" class="delete-career mb-0 btn btn-link btn-sm">
                                                    <i class="text-muted fas fa-trash-alt text-yellow"></i>
                                                </a>
                                                <a href="{{ route('edit-job',$data->id) }}" class="mb-0 btn btn-link btn-sm">
                                                    <i class="text-muted fas fa-pen text-yellow"></i>
                                                </a>

                                        </div>
                                        <div class="row float-right mt-4">
                                        <form action="{{ route('update-status-job',$data->id) }}" method="POST">
                                            @csrf
                                            {{-- {{$data->status}} --}}
                                            <button class="btn btn-status {{ $data->status == '0' ? 'btn-outline-danger' : 'btn-outline-success' }}" style="border-radius:50px;" type="submit">
                                                {{ $data->status == '0' ? 'NOT ACTIVE' : 'ACTIVE' }}
                                            </button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
        @endforeach
    </tbody>
    {{ $datas->render() }}
            @include('layouts.footers.auth')
    </div>

@endsection
@push('js')
    <script>
        Waves.attach('.btn');
        Waves.init();
        $('#division').on('change',function(){
            $('#form').submit();
        });
        $('#location').on('change',function(){
            $('#form').submit();
        });

        $('.delete-career').click(function(e){
              e.preventDefault();
              var link_job = $(this).attr('href');
              swal({
                title:'Are you sure?',
                type:'warning',
                showCancelButton:true,
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
              }).then((result)=>{
                if(result.value){
                  window.location.href = link_job;
                console.log('Button was clicked');
                }
              })
            });
            $('#pesan').show(function(){
              var pesan = $(this).data('pesan');
              Swal.fire({
                position: 'center',
                type: 'success',
                title: pesan,                
                showConfirmButton: true,
                timer: 1600
              })
            });
        // $(document).ready(function(){

        //     $('#keyword').on('keyup',function(){                     
        //         $('#hasil').html('');
        //         var keyword = $(this).val();
        //         $.ajax({
        //             type:'get',
        //             url:"{{route('ajaxSearch.job')}}",
        //             data:{
        //                 '_token' : $('input[name="_token"]').val(),
        //                 'keyword' : $(this).val(),
        //             },
        //             success: function(data){
        //                 console.log(data);
        //                 $('#hasil').html(data);
        //             }

        //         });
        //     });
        // });
    </script>
@endpush