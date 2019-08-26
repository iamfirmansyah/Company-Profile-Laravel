@extends('layouts.app')
@section('title','Mindstores | About us')
@section('css')
<link rel="stylesheet" href="{{asset('public/css/about.css')}}">
@endsection
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
        <div class="container">
            <h4 class="about-our wow fadeInDown">About Our Growth</h4><br>
            <div class="row wow fadeInDown">
              <div class="col-md-4 col-sm-12 col-xs-12 " data-wow-delay="1">
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
              <div class="col-md-4 col-sm-12 col-xs-12 ">
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
                              <h4 class="bg-text-1">Basket Size Growth (Compared to Physical Store)</h4>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
          </div>
    
    <div class="row pd-t-3">
      <?php $a=3; ?>
        @foreach ($master as $team)
        <?php if($a % 3 == '' ) { ?>
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft ptt-1">
        <div class="usercard" id="user1" data-foto="{{$team->foto}}" data-job="{{$team->job_name}}" data-name="{{$team->full_name}}" data-description="{!!$team->description!!}" data-phone="{{$team->phone}}" data-email="{{$team->email}}" data-twitter="{{$team->twitter}}" data-instagram="{{$team->instagram}}" data-linkedin="{{$team->linkedin}}" data-toggle="modal">
                  <style>
                    .usercard{
                      background:linear-gradient(rgba(2, 0, 36, 0),rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.6)),url('{{ asset('public/upload/images/team/'.$team->foto) }}');
                      height: 384px;
                      color: white;
                      padding: 5%;
                      position: relative;
                      background-size: cover;
                      background-repeat: no-repeat;
                      background-size:100%;
                    }
        
                  .usercard:hover{
                      transform:scale(1.1);
                      transition:.1s;
                      background:linear-gradient(rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.6)),url('{{ asset('public/upload/images/team/'.$team->foto) }}');
                      box-shadow:0 8px 8px 0 rgba(255, 226, 108, 0.1),0 6px 20px 0 rgba(255, 226, 100, 0.2);
                      height: 384px;
                      color: white;
                      padding: 5%;
                      position: relative;
                      background-size: cover;
                      background-repeat: no-repeat;
                      cursor : pointer;
                      background-size:100%;
                    }  
                  </style>
                  <div class="usercard-text" style="margin-top:40px;">
                    <span style="font-size:22px;">{{ ucfirst($team->job_name) }}</span>
                    <h3 style="font-weight:bold;padding-top:8px">{{ $team->full_name }}</h3>
                  <div class="row">
                      <div class="col-md-7">
                          {{-- <h4>{{ $team->phone }}</h4> --}}
                      </div>                      
                  </div>
                  </div>
                </div>
              </div>
            <?php }elseif($a % 3 == '1'){ ?>
              <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft ptt-1">
                  <div class="usercard1" id="user2" data-foto2="{{$team->foto}}" data-job2="{{$team->job_name}}" data-name2="{{$team->full_name}}" data-description2="{!!$team->description!!}" data-phone2="{{$team->phone}}" data-email2="{{$team->email}}" data-twitter2="{{$team->twitter}}" data-instagram2="{{$team->instagram}}" data-linkedin2="{{$team->linkedin}}"  data-toggle="modal">
                    <style>
                      .usercard1{
                        background:linear-gradient(rgba(2, 0, 36, 0),rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.6)),url('{{ asset('public/upload/images/team/'.$team->foto) }}');
                        height: 384px;
                        color: white;
                        padding: 5%;
                        position: relative;
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-size:100%;
                      }
          
                    .usercard1:hover{
                        transform:scale(1.1);
                        transition:.1s;
                        background:linear-gradient(rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.6)),url('{{ asset('public/upload/images/team/'.$team->foto) }}');
                        box-shadow:0 8px 8px 0 rgba(255, 226, 108, 0.1),0 6px 20px 0 rgba(255, 226, 100, 0.2);
                        height: 384px;
                        color: white;
                        padding: 5%;
                        position: relative;
                        background-size: cover;
                        background-repeat: no-repeat;
                        cursor : pointer;
                        background-size:100%;
                      }  
                    </style>
                    <div class="usercard-text" style="margin-top:40px;">
                    <span style="font-size:22px;">{{ucfirst($team->job_name) }}</span>
                      <h3 style="font-weight:bold;padding-top:8px">{{ $team->full_name }}</h3>
                    <div class="row">
                        <div class="col-md-7">
                            {{-- <h4>{{ $team->phone }}</h4> --}}
                        </div>                      
                    </div>
                    </div>
                  </div>
                </div>
              <?php }elseif($a % 3 == '2'){ ?>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft ptt-1">
                    <div class="usercard2" id="user3" data-foto3="{{$team->foto}}" data-job3="{{$team->job_name}}" data-name3="{{$team->full_name}}" data-description3="{!!$team->description!!}" data-phone3="{{$team->phone}}" data-email3="{{$team->email}}" data-twitter3="{{$team->twitter}}" data-instagram3="{{$team->instagram}}" data-linkedin3="{{$team->linkedin}}" data-toggle="modal" >
                      <style>
                        .usercard2{
                          background:linear-gradient(rgba(2, 0, 36, 0),rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.6)),url('{{ asset('public/upload/images/team/'.$team->foto) }}');
                          height: 384px;
                          color: white;
                          padding: 5%;
                          position: relative;
                          background-size: cover;
                          background-repeat: no-repeat;
                          background-size:100%;
                        }
            
                      .usercard2:hover{
                          transform:scale(1.1);
                          transition:.1s;
                          background:linear-gradient(rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.6)),url('{{ asset('public/upload/images/team/'.$team->foto) }}');
                          box-shadow:0 8px 8px 0 rgba(255, 226, 108, 0.1),0 6px 20px 0 rgba(255, 226, 100, 0.2);
                          height: 384px;
                          color: white;
                          padding: 5%;
                          position: relative;
                          background-size: cover;
                          background-repeat: no-repeat;
                          cursor : pointer;
                          background-size:100%;
                        }  
                      </style>
                      <div class="usercard-text" style="margin-top:40px;">
                        <span style="font-size:22px;">{{ ucfirst($team->job_name) }}</span>
                        <h3 style="font-weight:bold;padding-top:8px">{{ $team->full_name }}</h3>
                      <div class="row">
                          <div class="col-md-7">
                              {{-- <h4>{{ $team->phone }}</h4> --}}
                          </div>                      
                      </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                <?php $a++; ?>
        @endforeach    
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-2x   ptt-1 p10yeh" style="align:center">            
            <div class="" onmouseover="this.bgColor='white'">
                <div class="rectangle-1" style="height: 384px;width: 290px;"  >
                    <div class="p-2" >
                      <h2 style="font-weight:900; text-align:center; font-size:36px;padding-top:13%; padding-left:px; ">Want to work with us?</h2>                          
                            <p  style="text-align:center;padding-top:20px;"><a href="{{url('/careers')}}" class=" button button-2-b be"><span style="color:white">p </span><span>Careers</span><span style="color:white">p</span></a></p>  
                            <p  style="text-align:center"><a href="{{url('/contact-us')}}" class=" button button-2-b be"><span>Contact Us</span></a></p>   
                    </div>                 
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
    <div class="container">
        <div class="row" style="margin-top:25px;">
            @foreach ($teams as $item)                        
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft ptt-1" style="margin-bottom:10px">
                        <div class="usercard-image1a user4 yellowkaro" id="" data-foto4="{{$item->foto}}" data-job4="{{$item->job_name}}" data-name4="{{$item->full_name}}" data-description4="{!!$item->description!!}" data-phone4="{{$item->phone}}" data-email4="{{$item->email}}" data-twitter4="{{$item->twitter}}" data-instagram4="{{$item->instagram}}" data-linkedin4="{{$item->linkedin}}" 
                        style="
                        background:linear-gradient(rgba(2, 0, 36, 0),rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.6)),url('{{ asset('public/upload/images/team/'.$item->foto) }}');
                          height: 384px;
                          color: white;
                          padding: 5%;
                          position: relative;
                          background-size: cover;
                          background-repeat: no-repeat; background-size:100%;" data-toggle="modal">
                        <style>
                        .usercard-image1a:hover{
                          background:linear-gradient(rgba(2, 0, 36, 0),rgba(2, 0, 36, 0.1),rgba(2, 0, 36, 0.6)),url('{{ asset('public/upload/images/team/'.$item->foto) }}');
                            }  
                        </style>
                        <div class="usercard-text" style="margin-top:40px;">
                            <span style="font-size:22px;">{{ $item->job_name }}</span>
                            <h3 style="font-weight:bold;padding-top:8px">{{ $item->full_name }}</h3>
                        <div class="row">
                            <div class="col-md-7">
                                {{-- <h4>{{ $team->phone }}</h4> --}}
                            </div>  
                        </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
<!-- CLOSE CONTAINER  -->

</div>
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
.parallax { 
background-image: url( {{   asset ('img/content/jadi.png')}} );
min-height:400px;
max-width:100%;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
.gambar-1{
    background-image: url('public/img/content/about/img-about-4.png');
    background-size: 100%;
    width: 338px;
    background-repeat: no-repeat;
    height: 260px;
    background-size:cover;
}
.gambar-2{
    background-image: url('public/img/content/about/image-about-3.png');
    background-size: 100%;
    width: 338px;
    background-repeat: no-repeat;
    height: 260px;
    background-size:cover;
}
.gambar-3{
    background-image: url('public/img/content/about/image-about-2.png');
    background-size: 100%;
    box-shadow: 0 0 20px 0 rgba(76, 69, 69, 0.22), inset 0 1px 3px 0 rgba(0, 0, 0, 0.5);
    width: 338px;
    height: 260px;
    background-size:cover;
}
.gambar-4{
    background-image: url('public/img/content/about/image-about-1.png');
    background-size: 100%;
    width: 338px;
    height:260px;
    background-size:cover;
    
}
</style>
@endsection
@section('scripts')
<script src="{{asset('public/js/about.js')}}"></script>
@endsection
