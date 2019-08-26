@extends('layouts.app')
@section('title','Mindstores | Home')
@section('nav')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<li class="nav-item">
    <a class="nav-link"   href="{{url('/our-work')}}"> <b>Our Work</b>  <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{url('/news')}}">News</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " id="whawedo" href="{{url('/careers')}}">Careers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " id="about" href="{{url('/about-us')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " id="contact" href="{{url('/contact-us')}}">Contact Us</a>
      </li>
@endsection
<header>

@section('content')
<style>

    .item-1{
      width: 100%;
      color:black;
      height: 600px;
      background-position: left top;
      background-size: cover;
    }
    .owl-carousel{
      margin-top: 10px;
    }
    .owl-dots{
      display: none;
    }
                .img-res{
                    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
            }
  </style>

      <div class="owl-carousel owl-theme">
        @foreach ($highlights as $first)
        @if ($first->style == 'right')
          <div class="item-1 img-res" style="background-image: url('{{asset('public/upload/images/highlight/'.$first->image)}}');" >
              <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-8 pd-t-3" style="padding-left: 150px;">
                          <h1 class="txt {{$first->text_style == 'white' ? 'text-white' : 'text-dark'}}" >{{$first->title}}</h1>
                          &nbsp;
                          &nbsp;
                          <h4  style="" class="tix {{$first->text_style == 'white' ? 'text-white' : 'text-dark'}}">{!! str_limit($first->description,200) !!}</h4>
                          &nbsp;
                          @if (!empty($first->link))
                          <p><a href="http://{{ $first->link }}" target="_blank" class="{{ $first->button_style  == 'black' ? 'text-white button button-2-b' : ( $first->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                          @else
                            <p><a href="{{ route('detail-artikel',[$first->news->year,$first->news->month,$first->news->id,$first->news->slug]) }}" class="{{ $first->button_style  == 'black' ? 'text-white button button-2-b' : ( $first->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                          @endif
                  </div>
              </div>
          </div>
          @else
          <div class="item-1" style="background-image: url('{{asset('public/upload/images/highlight/'.$first->image)}}');">
            <div class="row pd-t-5">
                <div class="col-md-6 ml-5">
                  <h1  style="font-weight:bold;font-size:58px;margin-top: 2rem;color: black" class="{{$first->text_style == 'white' ? 'text-white' : 'text-dark'}}">{{$first->title}}</h1>
                  &nbsp;
                  &nbsp;
                  <h4 class="{{$first->text_style == 'white' ? 'text-white' : 'text-dark'}}">{!! str_limit($first->description,200) !!}</h4>
                  &nbsp;
                  @if (!empty($first->link))
                  <p><a href="http://{{ $first->link }}" target="_blank" class="{{ $first->button_style  == 'black' ? 'text-white button button-2-b' : ( $first->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                  @else
                  <p><a href="{{ route('detail-artikel',[$first->news->year,$first->news->month,$first->news->id,$first->news->slug]) }}" class="{{ $first->button_style  == 'black' ? 'text-white button button-2-b' : ( $first->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                  @endif
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        @endif
        @endforeach
      </div>

<section>
  
  <div class="container wow fadeIn animated  " style="margin-top: 10px">
      <div class="row ">
        <div class="col-md-6 card">
          <div class="bg-card-2">
            <div class="col-md-8 text-center mx-auto">
              <h1 style="font-weight:bold;">Find out Our Latest Project</h1>
            </div>
            <p style="text-align: center; margin-top:40px"><a href="{{url('/our-work')}}" class="button button-2-a-s"><span>NEWS</span></a></p>
          </div>
               {{-- <img class="card-image" src="{{ asset('public/img/content/HIGHLIGHT/1.jpg') }}" width="" alt=""> --}}
        </div>
{{--  --}}
        
        <div class="col-md-6 col-sm-6 col-xs-12 card" id="">
          <div class="bg-card-3">
            <div class="col-md-8 text-center mx-auto">
              <h1 style="font-weight:bold">More things about Mindstores</h1>
            </div>
            <p style="text-align: center; margin-top:40px;"><a href="{{url('/about-us')}}" class="button button-2-a"><span>Read More</span></a></p>
          </div>
               {{-- <img class="card-image" src="{{ asset('public/img/content/HIGHLIGHT/2.jpg') }}" width="" alt=""> --}}
        </div>

  </div>
  </div>
</section>


<br><br><br>
<div class="container">
  
  @foreach ($projects as $project)
    @if ($project->style == 'left')
  <div class="row">
        <div class="col-md-12">
            <div class="artikel-image" style="background-image:url('{{asset('public/upload/images/project/'.$project->image)}}');">
              <div class="artikel-text">
                  <h4 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}" style="font-weight:bold;">Project Name</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <h1 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}" style="font-weight:bold;margin-top: 2rem;">{{$project->title}}</h1>
                    </div>
                  </div><br>
                  <p style="text-align: left;"><a class="{{ $project->button_style  == 'black' ? 'text-white button button-2-b' : ( $project->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}" style="" 
                  href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">Read More</a></p>                
              </div>
            </div>
          </div>
    </div>
    &nbsp;
    @else
      <div class="row">
          <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="artikel-image" style="background-image:url('{{asset('public/upload/images/project/'.$project->image)}}');">
                <div class="artikel-text">
                  <div class="row">
                    <div class="col-md-6">
                      </div>
                      <div class="col-md-6">
                          <h4 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}" style="font-weight:bold;">Project Name</h4>
                          <h1 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}" style="font-weight:bold;margin-top: 2rem;">{{$project->title}}</h1><br>
                          <p style="text-align: left;"><a class="{{ $project->button_style  == 'black' ? 'text-white button button-2-b' : ( $project->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}" href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">Read More</a></p>                
                      </div>
                    </div>
                </div>
              </div>
            </div>
      </div>
      &nbsp;
      @endif
    @endforeach
  

  <div class="row pd-2 bg-card">
        <div class=" text-center col-md-9 offset-3 mx-auto wow fadeInDown animated" data-animate="animated flipInX">    
            <h2 class="jdl pd-t-3"><i class="fas fa-quote-left fa-1x"></i></h2>
            <p class="jim" style=""><strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima nisi, perspiciatis distinctio non eveniet, eaque, commodi eius atque quaerat obcaecati eos quisquam porro cumque tenetur? Quaerat suscipit nostrum quisquam perspiciatis? </strong> </p><br>
            <p class="text-center text-muted" style="color: #9B9B9B;; font-size: 20px;font-weight: 400">CEO Mindstores Jimmy Halim</p><br>
          </div>
          <hr style=" width: 90%;border-top: 2px solid  rgb(238, 238, 0);">
  </div>    
  <br>
  <h2 class="text-center" style="color: #9B9B9B ;font-size:32px;font-weight:600;">A few of our partners...</h2>
  <div class="row grayscale text-center pd-5 bg-white">
  </div>
   &nbsp;

  <div class="owl-carousel-2 owl-theme" align="center">
    <div class="item-a wow fadeInLeft" style=""></div>
    <div class="item-b wow fadeInLeft"></div>
    <div class="item-c wow fadeInLeft"></div>
    <div class="item-d wow fadeInLeft"></div>
    <div class="item-e wow fadeInLeft"></div>
  </div>
&nbsp;
<div class="row">
  @foreach ($teams as $team)
  <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft">
    <div class="usercard-image">
      <div class="usercard-text" style="margin-top:40px;">
      <h4 style="font-weight:bold;">{{ $team->job_name }}</h4>
      <h3 style="font-weight:bold;">{{ $team->full_name }}</h3>
      <h4>{!! str_limit($team->description,50) !!}</h4>
      <h4>{{ $team->phone }}</h4>
      </div>
    </div>
  </div>
  @endforeach

  <div class="col-xs-12 col-md-4 col-sm-6 wow fadeInLeft delay-1x">
      <div class="usercard-bg">
          <div class="usercard-text" style="margin-top:40px;">
            <h2 style="font-weight:900" class="we-are-looking-for-t ">We are looking for the best to join our family</h2><br>
            <button class="rectangle-002 read-moree" style="margin-bottom: 20px;"><a href="{{url('careers')}}" class="text-dark">Careers</a></button>
          </div>
        </div>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-2x">
      <div class="usercard-bg-2">
          <div class="usercard-text" style="margin-top:40px;">
            <h2 style="font-weight:bold;">Need Further information about us?</h2><br>
            <button class="rectangle-002-black read-more-white text-white" style="margin-bottom: 20px;"><a href="{{url('contact-us')}}"  class="text-white">Contact Us</a></button>
          </div>
        </div>
  </div>
</div>

</div>

<div style="padding-bottom:5%;">
</div>

</div>

<style>
  .we-are-looking-for-t {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 40px;
  font-weight: 900;
  line-height: 48px;
  text-align: left;
}
  .owl-dotss{
    display: none;
  }
  body{
    overflow-x: hidden;
  }
  .delay-1x{
  animation-duration: 1s;
  animation-delay: 0.3s;
  }
  .delay-2x{
  animation-duration: 1s;
  animation-delay: 0.5s;
  }
  .item-a{
    background-image: url('public/img/content/logo/metranett.png');    
    color: white;
    background-size: 80%;
    width: 80%;
    background-position: center;
    height: 14%;
    background-repeat: no-repeat;
    animation-duration: 1s;
    animation-delay: 0.3s;
  }
  .item-b{
    background-image: url('public/img/content/logo/alfamart.png');
    color: white;
    background-size: 60%;
    width: 100%;
    background-position: center;
    height: 14%;
    background-repeat: no-repeat;
    animation-duration: 1s;
    animation-delay: 0.3s;
  }
  .item-c{
    background-image: url('public/img/content/logo/kimia-farmaa.png');
    color: white;
    background-size: 80%;
    width: 80%;
    background-position: center;
    height: 14%;
    background-repeat: no-repeat;
    animation-duration: 1s;
    animation-delay: 0.3s;
  }
  .item-d{
    background-image: url('public/img/content/logo/indihome.png');
    color: white;
    background-size: 60%;
    width: 100%;
    background-position: center;
    height: 14%;
    background-repeat: no-repeat;
    animation-duration: 1s;
    animation-delay: 0.3s;
  }
  .item-e{
    background-image: url('public/img/content/logo/telkomm.png');
    color: white;
    background-size: 70%;
    width: 60%;
    background-position: center;
    height: 14%;
    background-repeat: no-repeat;
    animation-duration: 1s;
    animation-delay: 0.3s;
  }
  body{
    background-color: white;
    margin: 0;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
  }
  .rectangle-002-black {
  border: 5px solid #FFFFFF;
  width: 240px;
  height: 80px;
  background-color: #262626; 
}
.rectangle-002-black:hover{
  border:3px solid #262626;
  font-weight:bold;
  color:#000;
  transform:scale(1.1);
  transition:.1s;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.37),0 6px 20px 0 rgba(0, 0, 0, 0.37);
}
.rectangle-002 {
  border: 5px solid #4A4A4A;
  background-color: rgb(245, 245, 245);
  width: 240px;
  height: 80px;
}
.rectangle-002:hover{
  border:3px solid #ffff;
  font-weight:bold;
  color:#000;
  transform:scale(1.1);
  transition:.1s;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.37),0 6px 20px 0 rgba(0, 0, 0, 0.37);
}
.read-moree {
  background-color: white;
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
  line-height: 24px;
  text-align: center;
}
.read-more-white {
  color: #FFFFFF;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
  line-height: 24px;
  text-align: center;
}
.txt{
  font-size:52px;
  font-weight:bold;margin-top: 2rem;color: black
}
.tix{
  margin-top:10px; font-size: 18px; padding-right: 11%;font-weight: 400
}
.jim{
  font-weight:500;font-size:28px;line-height: 43px;
}
@media(max-width: 900px){
  .txt{
  font-size:26px;
  font-weight:bold;margin-top: 70px;color: black
}
.tix{
  margin-top:5px; font-size: 12px; padding-right: 11%;font-weight: 400; line-height: 18px;
}
.jim{
  font-size: 16px;line-height: 19px;
}
}
</style>

@endsection

@section('scripts')
    
  <script>
    $('.owl-carousel').owlCarousel({
    loop:true,    
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

  $('.owl-carousel-2').owlCarousel({
    loop : true,
    margin : 10,
    autoplay : true,
    autoplayTimeout : 6000,
    autoplayHoverPause:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items: 1
      },
      1000:{
        items:5
      }
    }
  });


  </script>

@endsection