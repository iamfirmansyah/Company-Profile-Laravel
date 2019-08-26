@extends('layouts.app')
@section('title','Mindstores | Our Work')
@section('nav')
<li class="nav-item " id="home">
    <a class="nav-link " style="font-weight:800;"  href="{{url('/our-work')}}"> <b>Our Work</b>  <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
      <a class="nav-link " href="{{url('/news')}}">News</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " id="whawedo" href="{{url('/careers')}}">Careers</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" id="about" href="{{url('/about-us')}}">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact" href="{{url('/contact-us')}}">Contact Us</a>
      </li>
@endsection
@section('content')

<!-- Container element -->
<div class="container"> 
      <br>  
    {{Breadcrumbs::render('detailourwork',$getDetailProject)}}

<div class="row">
        @if ($getDetailProject->style == 'right')
        <div class="item-1" style="background-image: url('{{asset('public/upload/images/project/'.$getDetailProject->image)}}');" data-merge="5">
          <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-5 pd-t-5" style="padding-left:50px;">
                <h4 class="{{ $getDetailProject->text_style == 'white' ? 'text-white' : 'text-dark' }}"><strong>{{$getDetailProject->project_name}}</strong></h4>
                <h1 class="pd-t-5 cntent font-weight-bold {{ $getDetailProject->text_style == 'white' ? 'text-white' : 'text-dark' }}">{{$getDetailProject->title}}</h1><br>  
              </div>
            </div>
          </div>
         @else
         <div class="item-1" style="background-image: url('{{asset('public/upload/images/project/'.$getDetailProject->image)}}');" data-merge="5">
          <div class="row">
            <div class="col-md-6 pd-t-5" style="padding-left:60px;">
                <h4 class="{{ $getDetailProject->text_style == 'white' ? 'text-white' : 'text-dark' }}"><strong>{{ $getDetailProject->project_name }}</strong></h4>
                <h1 class="pd-t-5 cntent {{ $getDetailProject->text_style == 'white' ? 'text-white' : 'text-dark' }}"><strong>{{$getDetailProject->title}}</strong></h1><br>
            </div>        
          </div>
        </div>
         @endif 
</div> &nbsp;

@if ($getDetailProject->style_1 == 'left' )
<div class="row"> 
  <div class="col-md-5 item-2" style="background-image: url('{{asset('public//upload/images/project/image_1/'.$getDetailProject->image_1)}}');"></div>
  <div class="col-md-7"><br>
    <div class="p">{!! $getDetailProject->description_1 !!}</div>
  </div>
</div>
@elseif($getDetailProject->style_1 == 'right')
<div class="row">
        <div class="col-md-7"><br>
           <div class="p">{!! $getDetailProject->description_1 !!}</div>
        </div>
        <div class="col-md-5 item-2" style="background-image: url('{{asset('public//upload/images/project/image_1/'.$getDetailProject->image_1)}}');"></div>
    </div>
@endif

@if ($getDetailProject->style_2 == 'right' )
<div class="row">
        <div class="col-md-7"><br>
           <div class="p">{!! $getDetailProject->description_2 !!}</div>
        </div>
        <div class="col-md-5 item-2" style="background-image: url('{{asset('public//upload/images/project/image_2/'.$getDetailProject->image_2)}}');"></div>
    </div>
@elseif($getDetailProject->style_2 == 'left')
    <div class="row"> 
            <div class="col-md-5 item-2" style="background-image: url('{{asset('public//upload/images/project/image_2/'.$getDetailProject->image_2)}}');"></div>
            <div class="col-md-7"><br>
              <div class="p">{!! $getDetailProject->description_2 !!}</div>
            </div>
          </div>
@endif


<div class="row">
  <div class="col-md-12 text-center"><br>
        <div class="p" style="text-align: center;">{!! $getDetailProject->description_n !!}</div>
  </div>
</div>
</div>
<div class=""><br><br></div>
        <div class="owl-carousel owl-theme owl-about">
            <div class="gambar-1" style="background-image: url('{{asset('public//upload/images/project/image_only/'.$getDetailProject->image_only1)}}');"></div>
            <div class="gambar-2" style="background-image: url('{{asset('public//upload/images/project/image_only/'.$getDetailProject->image_only2)}}');"></div>
            <div class="gambar-3" style="background-image: url('{{asset('public//upload/images/project/image_only/'.$getDetailProject->image_only3)}}');"></div>
            <div class="gambar-4" style="background-image: url('{{asset('public//upload/images/project/image_only/'.$getDetailProject->image_only4)}}');"></div>
        </div>
        <br>
  
@endsection
<style> 
.owl-dots{
    display: none;
}
.cntent{
      color: #FFFFFF;
      font-family: Avenir;
      font-size: 48px;
      font-weight: 900;
      line-height: 50px;
      text-align: left;
    }
body{
  background: white !important;
  overflow-x: hidden;
}
.gambar-1{
    
    background-size: 100%;
    width: 338px;
    background-repeat: no-repeat;
    height: 260px;
}
.gambar-2{
    background-image: url('{{asset('public/img/content/about/image-about-3.png')}}');
    background-size: 100%;
    width: 338px;
    background-repeat: no-repeat;
    height: 260px;
}
.gambar-3{
    background-image: url('{{asset('public/img/content/about/image-about-2.png')}}');
    background-size: 100%;
    box-shadow: 0 0 20px 0 rgba(76, 69, 69, 0.22), inset 0 1px 3px 0 rgba(0, 0, 0, 0.5);
    width: 338px;
    height: 260px;
    z-index: 100;
}
.gambar-4{
    background-image: url('{{asset('public/img/content/about/image-about-1.png')}}');
    background-size: 100%;
    width: 338px;
    height:260px;
}

    .item-1{
      width: 100%;
      color:black;
      height: 520px;
      background-position: left top;
      background-size: cover;
      align:center;
    }
      .item-2{
      width: 100%;
      height: 22rem;
      background-position: left top;
      background-size: cover;
      align:center;
      margin: %;
    }
    .pd-t-10{
      margin-top: 15%;
    }
    .blank{
      width: 100%;
    }
    .p{
  color: #000000;
  font-family: Avenir;
  font-size: 18px;
  font-weight: 600;
  line-height: 27px;
  text-align: justify;
  margin: 1%;
  }
  .pl-3 {
    padding-left: 3%;
  }
</style>
@section('scripts')

    <script>  
    var owl = $('.owl-about');
    owl.owlCarousel({
        loop:true,
        slideTransition:'linear',
        autoplay:true,
        autoplayTimeout:5000,
        autoplaySpeed:5000,
        autoplayHoverPause:false,
        responsive :{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        }

    });

    $(document).ready(function(){
      $.ajax({
        type: "post",
        url: "{{ route('update.visit.count.project') }}",
        data: {
          '_token' : "{{ csrf_token() }}",
          'id' : {{ $getDetailProject->id }},
          'visit_count' : {{ $getDetailProject->visit_count }},
        },
        success: function (response) {
          console.log('success');
        },
        error: function(response) {
          console.log('error');
        }
      });
    });

    </script>
@endsection