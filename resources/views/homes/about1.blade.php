@extends('layouts.app')
@section('title','Mindstores | About us')
@section('nav')
<li class="nav-item " id="home">
        <a class="nav-link "   href="{{url('/our-work')}}"> <b>Our Work</b>  <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{url('/news')}}">News</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " id="whawedo" href="{{url('/careers')}}">Careers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="font-weight:bold;" id="about" href="{{url('/about-us')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " id="contact" href="{{url('/contact-us')}}">Contact Us</a>
          </li>
@endsection
@section('content')
<style>
    body{
        overflow-x: hidden;
    }
</style>
<!-- Container element -->
<div class="container">
        <div class="row"> 
            <div class="col-md-8">  
      <div class="row">
        <div class="col-md-8 who">
          <p>Who Are we?</p>
    
          <p>We Are Mindstores.</p>
        </div>
      </div>
      <div class="row"> 
        <div class="col-md-12" style="margin: 2px;"> 
            <p>&nbsp;</p>
    
    <p style="font-size: 18px;"><strong class="mind">MindStores</strong> is a company that specializes on the developments of virtual sales/retail stores network, and the underlying integrated solutions which incorporate AR-VR Technologies, People Empowerment, and Creative Engagements.</p>
    
    <p style="font-size: 18px;">With the capability to formulate, integrate and develop advanced technologies, MindStores has the edge to continuously spawn various disruptive yet practical commercial purpose built projects through cooperations with strategic partners.</p>
    
        </div>
      </div>
    
    </div>
    <div class="col-md-4" style="text-align: center; align:center" >  
        <img src="{{asset('public/img/png/mind.png')}}" width="380px" alt="">
    </div>
        </div>
        <div class="row"> 
            <div class="col-md-12">  <br> 
              <div class="row">
                <div class="col-md-10 offset-1" style="padding-left: 4%;">
                <p class="c text-center" style="margin-top: 5px;"> “ </p>
                <p class="to"> Together with our business partners, Mindstores creates technology breakthrough and become the pioneer
                of 3D Augmented and Virtual Reality technology in Asia.</p><br>
              <p class="ceo-mindstores-jim"> CEO Mindstores - Jimmy Halim</p>
                </div>
              </div>
            </div>
        </div>
    </div>
    &nbsp;
    <br>
    
        <div class="owl-carousel owl-theme owl-about">
            <div class="gambar-1"></div>
            <div class="gambar-2"></div>
            <div class="gambar-3"></div>
            <div class="gambar-4"></div>
        </div>
    
    <br><br>
  {{-- <div class="row pd-t-5 wow fadeIn animated"> --}}
      <?php $a = 0; ?>
      <?php $b = 2; ?>
      <!-- baris 1 -->
      {{-- @foreach ($primary as $prima)
      <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Yellow" ">
              <h2>
              <span>{{$prima->first_name}} {{ $prima->last_name }}</span>
                  <strong>
                      <i class="fa fa-fw fa-star"></i>
                        {{$prima->job}}
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-fluid" src="{{asset('upload/images/userCard/'.$prima->foto)}}">
                    </div>
                    <div class="mc-description">
                        {{$prima->bio}}
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-align-justify"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        
                    </h4>
                    <a href="" class="fa fa-fw fa-facebook"></a>
                    <a href="" class="fa fa-fw fa-twitter"></a>
                    <a href="" class="fa fa-fw fa-instagram"></a>
                    
                </div>
            </article>
        </div>
        @endforeach

      @foreach ($userCard as $item)
      <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Yellow" ">
              <h2>
              <span>{{$item->first_name}} {{ $item->last_name }}</span>
                  <strong>
                      <i class="fa fa-fw fa-star"></i>
                        {{$item->job}}
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-fluid" src="{{asset('upload/images/userCard/'.$item->foto)}}">
                    </div>
                    <div class="mc-description">
                        {{$item->bio}}
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-align-justify"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        
                    </h4>
                    <a href="" class="fa fa-fw fa-facebook"></a>
                    <a href="" class="fa fa-fw fa-twitter"></a>
                    <a href="" class="fa fa-fw fa-instagram"></a>
                    
                </div>
            </article>
        </div>
        @endforeach --}}
        <div class="container">
    <h4 class="about-our wow fadeInDown">About Our Growth</h4><br>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 wow fadeInDown" data-wow-delay="1">
         <div class="bg-about-1">
          <div class="about-text ml-2" style="padding: 4%;">
          <h1><img src="{{ asset('public/img/content/about/users.png') }}" alt=""></h1>
           <h1 class="k37">37.000+</h1>
           <div class="row">
            <div class="col-md-8">
             <h4 class="bg-text-1">Registered Store Owner
                 (Starting May 2017)</h4>
            </div>
            </div>
          </div>
         </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="bg-about-2" >
        <div class="about-text ml-2" style="padding: 4%;" >
        <h1><img src="{{ asset('public/img/content/about/cube.png') }}" alt="" ></h1>
        <h1 class="k17">17.000+</h1>
        <div class="row">
            <div class="col-md-6">
            <h4 class="text-white" style="font-weight: 600;font-size: 17px;line-height: 24px;">Products and Counting</h4>
            </div>
        </div>
        </div>
        </div>
        </div>
        <br>
        <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="bg-about-3" style="">
            <div class="about-text ml-2"  style="padding: 4%;">
                <h1><img src="{{ asset('public/img/content/about/basket.png') }}" alt=""></h1>
                <h1 class="k37">2.3x</h1>
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="bg-text-1">Basket Size Growth
                                (Compared to Physical Store)</h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    <div class="row pd-t-3">
        <?php $a = 2; ?>
        @foreach ($master as $top3)
        <?php if($a % 2 == '1'){ ?>
        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft">
                <div class="usercard-image1">
                  <style>
                    .usercard-image1{
                      background:linear-gradient(rgba(255, 255, 255, 0),rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),url('{{ asset('public/upload/images/team/'.$top3->foto) }}');
                      height: 584px;
                      color: white;
                      padding: 5%;
                      position: relative;
                      background-size: cover;
                      background-repeat: no-repeat;
                    }
        
                  .usercard-image1:hover{
                      transform:scale(1.1);
                      transition:.1s;
                      background:linear-gradient(rgba(255, 226, 108, 0.2),rgba(255, 226, 100, 0.3),rgba(255, 226, 100, 0.6)),url('{{ asset('public/upload/images/team/'.$top3->foto) }}');
                      box-shadow:0 8px 8px 0 rgba(255, 226, 108, 0.1),0 6px 20px 0 rgba(255, 226, 100, 0.2);
                      height: 584px;
                      color: white;
                      padding: 5%;
                      position: relative;
                      background-size: cover;
                      background-repeat: no-repeat;
                    }  
                  </style>
                  <div class="usercard-text" style="margin-top:40px;">
                  <h4 style="font-weight:bold;">{{ $top3->job_name }}</h4>
                  <h3 style="font-weight:bold;">{{ $top3->full_name }}</h3>
                  <h4>{!! str_limit($top3->description,50) !!}</h4>
                  <div class="row">
                      <div class="col-md-7">
                          <h4>{{ $top3->phone }}</h4>
                      </div>
                      <div class="col-md-5">
                          <a href="https://{{$top3->twitter}}" target="_blank" class="{{$top3->twitter == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                
                        <a href="https://{{$top3->instagram}}" target="_blank" class="{{$top3->instagram == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                            <i class="fab fa-instagram text-white"></i>
                        </a>                
                        <a href="https://{{$top3->linkedin}}" target="_blank" class="{{$top3->linkedin == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
            <?php }else{ ?>
                <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft">
                        <div class="usercard-image2">
                          <style>
                            .usercard-image2{
                              background:linear-gradient(rgba(255, 255, 255, 0),rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),url('{{ asset('public/upload/images/team/'.$top3->foto) }}');
                              height: 584px;
                              color: white;
                              padding: 5%;
                              position: relative;
                              background-size: cover;
                              background-repeat: no-repeat;
                            }
                
                          .usercard-image2:hover{
                              transform:scale(1.1);
                              transition:.1s;
                              background:linear-gradient(rgba(255, 226, 108, 0.2),rgba(255, 226, 100, 0.3),rgba(255, 226, 100, 0.6)),url('{{ asset('public/upload/images/team/'.$top3->foto) }}');
                              box-shadow:0 8px 8px 0 rgba(255, 226, 108, 0.1),0 6px 20px 0 rgba(255, 226, 100, 0.2);
                              height: 584px;
                              color: white;
                              padding: 5%;
                              position: relative;
                              background-size: cover;
                              background-repeat: no-repeat;
                            }  
                          </style>
                          <div class="usercard-text" style="margin-top:40px;">
                          <h4 style="font-weight:bold;">{{ $top3->job_name }}</h4>
                          <h3 style="font-weight:bold;">{{ $top3->full_name }}</h3>
                          <h4>{!! str_limit($top3->description,50) !!}</h4>
                          <div class="row">
                              <div class="col-md-7">
                                  <h4>{{ $top3->phone }}</h4>
                              </div>
                              <div class="col-md-5">
                                  <a href="https://{{$top3->twitter}}" target="_blank" class="{{$top3->twitter == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                        
                                <a href="https://{{$top3->instagram}}" target="_blank" class="{{$top3->instagram == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                                    <i class="fab fa-instagram text-white"></i>
                                </a>                
                                <a href="https://{{$top3->linkedin}}" target="_blank" class="{{$top3->linkedin == '' ? 'd-none' : 'd-inline'}}" style="padding-right:10%;">
                                    <i class="fab fa-linkedin-in text-white"></i>
                                </a>
                              </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                    <?php $a++; ?>
        @endforeach        
        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-2x">            
            <div class="" style="margin-bottom: 5px;">
                <div class="rectangle-1">
                    <div class="p-2">
                      <h2 style="font-weight:bold; font-size: 38px;padding: 5%;">We are looking
                            for the best
                            to join our Family.</h2>                          
                            <p  style="padding-left: 5%;"><a href="{{url('/careers')}}" class=" button button-2-b be"><span>Careers</span></a></p>   
                    </div>                 
                </div>
            </div>
            <div class="">
                <div class="rectangle-2">
                    <div class="p-2">
                        <h2 class="font-weight-bold text-left text-white "style="padding:5%;padding-top: 10%;" >Need further information about us?
                        </h2>
                        <p style="padding-left: 5%;"><a href="{{url('/contact-us')}}" class="text-white button button-2-b" style="padding: 18px 60px 18px 60px;"><span>Contact Us</span></a></p>   
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<!-- CLOSE CONTAINER  -->
</div>

<style> 
body{
	background-color: white;
}
.owl-dots{
    display: none;
}
.gambar-1{
    background-image: url('public/img/content/about/img-about-4.png');
    background-size: 100%;
    width: 338px;
    background-repeat: no-repeat;
    height: 260px;
}
.gambar-2{
    background-image: url('public/img/content/about/image-about-3.png');
    background-size: 100%;
    width: 338px;
    background-repeat: no-repeat;
    height: 260px;
}
.gambar-3{
    background-image: url('public/img/content/about/image-about-2.png');
    background-size: 100%;
    box-shadow: 0 0 20px 0 rgba(76, 69, 69, 0.22), inset 0 1px 3px 0 rgba(0, 0, 0, 0.5);
    width: 338px;
    height: 260px;
    z-index: 100;
}

.gambar-4{
    background-image: url('public/img/content/about/image-about-1.png');
    background-size: 100%;
    width: 338px;
    height:260px;
}

.ceo-mindstores-jim {
        color: #9B9B9B;
        font-family: Avenir;
        font-size: 24px;
        font-weight: 400;
        line-height: 29px;
        text-align: center;
      }
        .to {
        color: #4A4A4A;
        font-family: Avenir;
        font-size: 30px;
        font-weight: 800;
        line-height: 43px;
        text-align: center;
      }
        .c {
        color: #9B9B9B;
        font-family: Avenir;
        font-size: 36px;
        font-weight: 900;
        line-height: 43px;
        text-align: left;
      }
      body{
          background-color: white;
      }
      .mind {
        color: #4A4A4A;
        font-family: Avenir;
        font-size: 18px;
        font-weight: 800;
        line-height: 24px;
        text-align: left;
      }
      .who {
        color: #4A4A4A;
        font-family: Avenir;
        font-size: 48px;
        font-weight: 900;
        line-height: 50px;
        text-align: left;
      }
  .parallax { 
  /* The image used */
  background-image: url( {{   asset ('img/content/jadi.png')}} );

  /* Set a specific height */
 min-height:400px;
max-width:100%;
  /* Create the parallax scrolling effect */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.gray{
	color: #8E8E8E;
}
.label{
    font-family: calibri;
    color: #8E8E8E;
    font-size: 17px;
    letter-spacing: 0.2px;
}
.be {
    font-weight: bold;
    background-color: white;
    padding: 17px 65px 17px 65px;
    color: black;
    border: 5px solid black;
    font-size: 18px;
}
.be:hover {
   font-size: 18px;
    font-weight: bold;
    background-color: white;
    padding: 17px 65px 17px 65px;
    color: black;
    border: 3px solid white;
}
</style>
@endsection
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
    </script>
@endsection
