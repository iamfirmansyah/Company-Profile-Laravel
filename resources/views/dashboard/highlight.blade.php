@extends('layouts.argon')
@section('title','Dashboard | Highlight')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <h1>Highlight</h1>
                <!-- Card stats -->
                
                <div class="row">
                  <div class="col-xl-4 col-lg-6">
                      <form action="{{ route('search-high') }}" method="GET" id="form">                    
                            <div class="form-group mb-0 border" style="border-radius:5rem;">
                                <div class="input-group input-group-alternative" style=" border-color:#e4e4e4">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search " style="color:#7f7f7f"></i></span>
                                  </div>
                                  <input class="form-control" autocomplete="off" name="keyword" placeholder="Search Highlight..." type="text">
                                </div>
                            </div>
                          </form>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                        <form action="{{ route('search-high-date') }}" method="GET" id="form2">
                                <input type="date" name="date1" id="date1" class="form-control" style="border-radius:1.375rem;">
                        </div>
                        <div class="col-xl-3 col-lg-6">                            
                                <input type="date" name="date2" id="date2" class="form-control" style="border-radius:1.375rem;">
                              </form>
                        </div>                      
                    </div>
            </div>
            <div class="col-md-12 ml-auto mb-3">
              <form action="{{ route('create-highlight-view') }}" class="float-right">
                  <a href="{{ url('/admin/create/highlight') }}" style="float:right; border-radius:1.375rem; border:none; " class="btn btn-warning bg-yellow">ADD HIGHLIGHT</a>
              </form>                         
              </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
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
        <div class="row m-1">
            <div class="col">
              @foreach ($highlights as $highlight)     
                <div class="card m-1 shadow--hover">                    
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                            <h3 class="mb-0">{{$highlight->title}}</h3>
                            <h4 class="mt-3 text-muted">{{$highlight->category}} | {{\Carbon\Carbon::parse($highlight->created_at)->formatLocalized("%d %B %Y")}}</h4>
                            <h5 class="mt-3 text-muted">Total View : {{ $highlight->news->visit_count }}</h5>
                            </div>
                            <div class="col-4">
                                <div class="row d-flex  flex-row-reverse mb-5">
                                  <a href="{{ route('delete-highlight',$highlight->id) }}" rel="tooltip" title="Remove" class="delete-highlight mb-0 btn btn-link btn-sm ">
                                      <i class="fas fa-trash-alt text-yellow"></i>
                                    </a>
                                    <a href="{{ route('edit-highlight',$highlight->id) }}" rel="tooltip" title="Edit" class="mb-0 btn btn-link btn-sm">
                                                <i class="text-yellow fas fa-pen "></i>
                                      </a>                                   
                                </div>
                                <div class="row float-right">
                                <form action="{{ route('update-status-highlight',$highlight->id) }}" method="POST">
                                    {{ csrf_field() }}
                                @if ($highlight->status == "0")
                                <button class="btn btn-status btn-outline-danger" id="status" data-id="" data-status="" style="border-radius:50px;" type="submit">NOT ACTIVE</button>
                                @else
                                <button class="btn btn-status btn-outline-success" id="status" data-id="" data-status="" style="border-radius:50px;" type="submit">ACTIVE</button>
                                @endif
                                
                                </form>
                            </div>
                            </div>
                            </div>
                    </div>          
            </div>
            @endforeach
            {!! $highlights->render() !!}
        </div>
    </div>
</tbody>
            @include('layouts.footers.auth')
    </div>

@endsection
@push('js')
    <script>
        Waves.attach('.btn');
        Waves.init();
        $('.delete-highlight').click(function(e){
              e.preventDefault();
              var link_high = $(this).attr('href');
              swal({
                title:'Are you sure?',
                type:'warning',
                showCancelButton:true,
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
              }).then((result)=>{
                if(result.value){
                  window.location.href = link_high;
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

            $('#date2').change(function(){
              $('#form2').submit();
            });
        
    </script>
@endpush