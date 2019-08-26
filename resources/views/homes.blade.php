@extends('layouts.app')
@section('title','Mindstores | Home')
@section('css')
<link rel="stylesheet" href="{{asset('public/css/homess.css')}}">
@endsection
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
                          <h1 style="" class="txt {{$first->text_style == 'white' ? 'text-white' : 'text-dark'}}" >{{$first->title}}</h1>
                          &nbsp;
                          &nbsp;
                          <h4  style="" class="tix {{$first->text_style == 'white' ? 'text-white' : 'text-dark'}}">{!! str_limit($first->description,200) !!}</h4>
                          &nbsp;
                          @if($first->link != '')
                          <p><a href="http://{{ $first->link }}" target="_blank" class="{{ $first->button_style  == 'black' ? 'text-white button button-2-b' : ( $first->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                          @elseif($first->link == '')
                            <p><a href="{{ route('detail-artikel',[$first->news->year,$first->news->month,$first->news->id,$first->news->slug]) }}" class="{{ $first->button_style  == 'black' ? 'text-white button button-2-b' : ( $first->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                          @endif
                  </div>
              </div>
          </div>
          @else
          <div class="item-1" style="background-image: url('{{asset('public/upload/images/highlight/'.$first->image)}}');">
            <div class="row pd-t-3">
                <div class="col-md-8 ml-5 ">
                  <h1 class="txt {{$first->text_style == 'white' ? 'text-white' : 'text-dark'}}">{{$first->title}}</h1>
                  &nbsp;
                  &nbsp;
                  <h4 class="tix {{$first->text_style == 'white' ? 'text-white' : 'text-dark'}}">{!! str_limit($first->description,200) !!}</h4>
                  &nbsp;
                  @if ($first->link != '')
                  <p><a href="http://{{ $first->link }}" target="_blank" class="{{ $first->button_style  == 'black' ? 'text-white button button-2-b' : ( $first->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                  @else
                  <p><a href="{{ route('detail-artikel',[$first->news->year,$first->news->month,$first->news->id,$first->news->slug]) }}" class="{{ $first->button_style  == 'black' ? 'text-white button button-2-b' : ( $first->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                  @endif
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
        @endif
        @endforeach
      </div>

<section>
  
  <div class="container wow fadeIn animated  " style="margin-top: 100px">
      <div class="">
      <div class="row ">
        <div class="col-md-6 card">
          <div class="bg-card-2">
            <div class="col-md-8 text-center mx-auto">
              <h1 style="font-weight:bold;padding-top: 15px">Find out Our Latest Project</h1>
            </div>
            <p style="text-align: center; margin-top:40px"><a href="{{url('/our-work')}}" class="button button-2-a-s"><span>News</span></a></p>
          </div>
               {{-- <img class="card-image" src="{{ asset('public/img/content/HIGHLIGHT/1.jpg') }}" width="" alt=""> --}}
        </div>
{{--  --}}
        
        <div class="col-md-6 col-sm-6 col-xs-12 card" id="">
          <div class="bg-card-3">
            <div class="col-md-8 text-center mx-auto">
              <h1 style="font-weight:bold;padding-top: 15px">More things about Mindstores</h1>
            </div>
            <p style="text-align: center; margin-top:40px;"><a href="{{url('/about-us')}}" class="button button-2-a"><span>About Us</span></a></p>
          </div>
               {{-- <img class="card-image" src="{{ asset('public/img/content/HIGHLIGHT/2.jpg') }}" width="" alt=""> --}}
        </div>
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
              <h4 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}" style="font-weight:bold;">{{ $project->project_name }}</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <h1 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}" style="font-weight:bold;margin-top: 2rem;">{{$project->title}}</h1>
                    </div>
                  </div><br>
                  <p style="text-align: left;"><a class="{{ $project->button_style  == 'black' ? 'text-white button button-2-b' : ( $project->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-aa') }}" style="" 
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
                          <h4 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}" style="font-weight:bold;">{{$project->project_name}}</h4>
                          <h1 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}" style="font-weight:bold;margin-top: 2rem;">{{$project->title}}</h1><br>
                          <p style="text-align: left;"><a class="{{ $project->button_style  == 'black' ? 'text-white button button-2-b' : ( $project->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-aa') }}" href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">Read More</a></p>                
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
            <p class="c text-center" style="margin-top: 5px;"> “ </p>
            <p class="jim" style=""><strong>Together with our business partners, Mindstores creates technology breakthrough and become the pioneer
of 3D Augmented and Virtual Reality technology in Asia. </strong> </p><br>
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
<div>
<div class="row">
  @foreach ($teams as $team)
    @if (strtoupper($team->job_name) == 'CEO')
    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft">
        <div class="usercard-image" data-foto="{{$team->foto}}" data-job="{{$team->job_name}}" data-name="{{$team->full_name}}" data-description="{!!$team->description!!}" data-phone="{{$team->phone}}" data-email="{{$team->email}}" data-twitter="{{$team->twitter}}" data-instagram="{{$team->instagram}}" data-linkedin="{{$team->linkedin}}" data-toggle="modal">
          <style>
            .usercard-image{
              background:linear-gradient(rgba(2, 0, 36, 0),rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.6)),url('{{ asset('public/upload/images/team/'.$team->foto) }}');
              height: 584px;
              color: white;
              padding: 5%;
              position: relative;
              background-size: cover;
              background-repeat: no-repeat;
            }

          .usercard-image:hover{
              transform:scale(1.1);
              transition:.1s;
              background:linear-gradient(rgba(255, 226, 108, 0.2),rgba(255, 226, 100, 0.3),rgba(255, 226, 100, 0.6)),url('{{ asset('public/upload/images/team/'.$team->foto) }}');
              box-shadow:0 8px 8px 0 rgba(255, 226, 108, 0.1),0 6px 20px 0 rgba(255, 226, 100, 0.2);
              height: 584px;
              color: white;
              padding: 5%;
              position: relative;
              background-size: cover;
              background-repeat: no-repeat;
            }  
          </style>

          <div class="usercard-text" style="margin-top:40px;padding-left:4%;">
          <h4>Chief Executive Officer</h4>
          <h2 style="font-weight:bold;">{{ $team->full_name }}</h2>
          <div class="" style="padding-top:5%" >
              <h5 class="">{{ $team->phone }}</h5>              
              <h5 class="">{{ $team->email }}</h5>
          </div>
          <div class="row " style="padding-bottom:8%; padding-top:3%;">
              <div class="col-md-6" style="font-size:18px;">
                  <a href="https://{{$team->twitter}}" target="_blank" class="{{$team->twitter == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                    <i class="fab fa-twitter text-white"></i>
                </a>
        
                <a href="https://{{$team->instagram}}" target="_blank" class="{{$team->instagram == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                    <i class="fab fa-instagram text-white"></i>
                </a>
        
                <a href="https://{{$team->linkedin}}" target="_blank" class="{{$team->linkedin == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                    <i class="fab fa-linkedin-in text-white"></i>
                </a>
              </div>
          </div>
          </div>
        </div>
      </div>
    @endif
  @endforeach

  <div class="col-xs-12 col-md-4 col-sm-6 wow fadeInLeft delay-1x">
      <div class="usercard-bg">
          <div class="usercard-text" style="margin-top:40px;">
            <h2 style="font-weight:900" class="we-are-looking-for-t ">We are looking for the best to join our family</h2><br>
            <button class="button button-2-c" style="margin-bottom: 20px;"><a href="{{url('careers')}}" class="text-dark">Careers</a></button>
          </div>
        </div>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-2x">
      <div class="usercard-bg-2">
          <div class="usercard-text" style="margin-top:40px;">
            <h2 style="font-weight:bold; color: white" class="we-are-looking-for-t ">Need Further information about us?</h2><br>
            <button class="button button-2-b text-white" style="margin-bottom: 20px;"><a href="{{url('contact-us')}}"  class="text-white">Contact Us</a></button>
          </div>
        </div>
  </div>
</div>
</div>
</div>

<div style="padding-bottom:5%;">
</div>

</div>

{{-- modal --}}

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content modal-size" style="margin-top:-3%;margin-bottom:-3%">
        <div class="modal-header" style="border-bottom:0px">
        <div class="back"  style="float:left"><p><a href="" ><img data-dismiss="modal" aria-label="modal" src="{{asset('public/img/content/Asset/back.jpeg')}}" width="70px" alt=""></a></p></div>
        </div>
        <!-- CONTENT -->
        <div class="modal-body" style="margin-left: 50px;margin-right:50px; margin-top: -30px">
          <div class="row" style="margin:1px; ">
            <div class="col-md-4 ">
              <div class="foto-tim blackee" id="foto">
              </div>
            </div>
            <div class="col-md-8 pdm" style="" >
              <p class="font-job" id="job">Creative Director (JOB)</p>
              <h1 style="font-weight: 700;" class="h1media" id="name">Adriel E.B.A.</h1>
              <div class="" style="width: auto">
                  <div class="font-modal" style="padding-top: 5%;height: 400px;">
                      <p id="description">Writing an effective introduction to your essay is important if you want to hook in your reader and get them interested in what you are going to say.</p>

                  </div>
              </div>
              <div class="font-foot">
                  <p id="phone">+62 84 2192 4023</p>
                  <p id="email">adriel@mymindstores.com</p>
                  <div class="" style="padding-top: 8px; margin-bottom:3%">
                      <a href="" id="twitter"><i class="fab fa-twitter awesome-font pr-1" ></i></a>
                      <a href="" id="instagram"><i class="fab fa-instagram awesome-font pr-1"></i></a>
                      <a href="" id="linkedin"><i class="fab fa-linkedin-in awesome-font "></i> </a>
                  </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


<style>
    .owl-dotss{
    display: none;
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
</style>

@endsection

@section('scripts')
<script src="{{asset('public/js/homes.js')}}"></script>
@endsection