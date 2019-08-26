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
  <div class="row pd-t-1">
  <div class="col-md-12 ">
    <h1 class="jdl text-center"><strong>What Mindstores Do?</strong></h1>
  </div>
</div>
<div class="row pd-t-1">
  <div class="col-md-12 ">
    <p class="p text-center" >We provide solutions with our advance technologies to improve your business and create more exposure through virtual world.</p>
  </div>
</div>
<div class="row pd-t-1">
  <!-- KONTEN KE 1 -->
  <div class="col-md-4">
    <div class="item-c ">
      <div class="mg-2">
        <i class="fas fa-desktop img-icon"></i>
        <h2 class="hh">Technology</h2>
        <p class="peh pd-t-1">Mindstores continuously innovate the developments of AR-VR technologies and apply them into various unique virtual retail stores network business solutions.</p>
        <p class="peh">Our developments and co-developments also widens into various related technologies such as the patented AR connected with payments modules, payment gateways, and many others.</p>
      </div>
    </div>
  </div>
  <!-- KONTEN KE 2 -->
  <div class="col-md-4">
    <div class="item-d  ">
      <div class="mg-2">
        <i class="fas fa-user-friends img-icon text-white"></i>
        <h2 class="hh text-white ">People Empowerment</h2>
        <p class="peh text-white pd-t-1">People have dreams and many of them dream to be successful in owning and running their own business.</p>
        <p class="peh text-white">Mindstores empowers people to best pursue their dreams by providing them with the winning formulas including business networks, platforms, trainings, etc.</p>
      </div>
    </div>
  </div>
  <!-- KONTEN KE 3 -->
  <div class="col-md-4">
    <div class="item-e ">
      <div class="mg-2">
        <i class="fas fa-lightbulb img-icon"  ></i><br>
        <h2 class="hh">Creative Engagements</h2>
        <p class="peh pd-t-1">If the word “Technology” leaves many people cold, we put our expertise and creative industry experience to make it more enjoyable and intuitive for most people to benefit from it by engaging them in various creative engagement activities and efforts.</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 pd-t-3  ">
     <h1 class="jdl text-center"><strong>This is Our Project</strong></h1><br>
  </div>
</div>
<?php $j = 5; ?>
@foreach ($projects as $project)
<?php if($j % 5 == '0'){ ?>
  @if ($project->style == 'left')    
  <div class="item-b" style="background-image: url('{{asset('public/upload/images/project/'.$project->image)}}');" data-merge="5">
    <div class="row">
      <div class="col-md-6 pd-t-5" style="padding-left:60px;">
          <h4 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}"><strong>{{ $project->project_name }}</strong></h4>
          <h1 class="pd-t-5 cntent {{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}"><strong>{{$project->title}}</strong></h1><br>
          <p style="text-align: left;">
          <a class="{{ $project->button_style  == 'black' ? 'text-white button button-2-b' : ( $project->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}" href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">Read More</a></p>   
      </div>        
    </div>
  </div>
  @else
  <div class="item-a" style="background-image: url('{{asset('public/upload/images/project/'.$project->image)}}');" data-merge="5">
    <div class="row">
      <div class="col-md-6">
        
      </div>
      <div class="col-md-5 pd-t-5" style="padding-left:50px;">
          <h4 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}"><strong>{{$project->project_name}}</strong></h4>
          <h1 class="pd-t-5 cntent {{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}">{{$project->title}}</h1><br>
          <p style="text-align: left;">
            <a class="{{ $project->button_style  == 'black' ? 'text-white button button-2-b' : ( $project->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}" href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">Read More</a></p>   
        </div>
      </div>
    </div>
  @endif
<?php }elseif($j % 5 == '1'){ ?>
  @if ($project->style == 'right')
  <div class="item-a" style="background-image: url('{{asset('public/upload/images/project/'.$project->image)}}');" data-merge="5">
    <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-5 pd-t-5" style="padding-left:50px;">
          <h4 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}"><strong>{{$project->project_name}}</strong></h4>
          <h1 class="pd-t-5 cntent {{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}">{{$project->title}}</h1><br>
          <p style="text-align: left;">
            <a class="{{ $project->button_style  == 'black' ? 'text-white button button-2-b' : ( $project->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}" href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">Read More</a></p>   
        </div>
      </div>
    </div>
   @else
   <div class="item-b" style="background-image: url('{{asset('public/upload/images/project/'.$project->image)}}');" data-merge="5">
    <div class="row">
      <div class="col-md-6 pd-t-5" style="padding-left:60px;">
          <h4 class="{{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}"><strong>{{ $project->project_name }}</strong></h4>
          <h1 class="pd-t-5 cntent {{ $project->text_style == 'white' ? 'text-white' : 'text-dark' }}"><strong>{{$project->title}}</strong></h1><br>
          <p style="text-align: left;">
          <a class="{{ $project->button_style  == 'black' ? 'text-white button button-2-b' : ( $project->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}" href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">Read More</a></p>   
      </div>        
    </div>
  </div>
   @endif
  {{-- !!! --}}
  <?php }elseif($j % 5 == '2'){ ?>
    <div class="row">
      <a href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">
        <div class="col-md-6">
            <!-- FOTO BESAR 1 -->
          <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12 wow fadeInLeft">
                <div class="usercard-imagee">
                  <style>
                    .usercard-imagee{background:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('{{ asset('public/upload/images/project/'.$project->image) }}');}.usercard-imagee:hover{background:linear-gradient(rgba(255, 226, 108, 0.9),rgba(255, 226, 100, 0.7),rgba(255, 226, 100, 0.6)),url('{{ asset('public/upload/images/project/'.$project->image) }}');}
                  </style>
                  <div class="usercard" style="margin-top:40px;">
                    <h4><strong>Project Name</strong></h4>
                  <h1 class="pd-t-3 cntent"><strong>{{ $project->title }}</strong></h1><br>  
                  </div>
                </div>
            </div>
          </div>
      </a>
      
        </div>
        <div class="col-md-6">
            <?php }elseif($j % 5 == '3'){ ?>
        <a href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">
          <div class="row">
              <div class="card-foto1 " data-merge="5"> 
                <div class="col-md-12 pd-t-5" style="padding-left:60px;">
                  <h4><strong>Project Name</strong></h4>
                  <h1 class="pd-t-3 cntent"><strong>{{$project->title}}</strong></h1><br>  
                </div>        
              </div>
          </div>
        </a>
        <?php }else{ ?>
          <a href="{{route('detail-ourwork',[Carbon\Carbon::parse($project->created_at)->formatLocalized('%Y'),Carbon\Carbon::parse($project->created_at)->formatLocalized('%M'),$project->id,$project->slug]) }}">
          <div class="row">
              <div class="card-foto1" data-merge="5"> 
                <div class="col-md-12 pd-t-5" style="-webkit-filter:brightness(100%);;padding-left:60px;">
                  <h4><strong>Project Name</strong></h4>
                  <h1 class="pd-t-3 cntent"><strong>{{$project->title}}</strong></h1><br>  
                </div>
              </div>
          </div>
          </a>
        </div>
        <?php } ?>
        <?php $j++; ?>
@endforeach
        </div>

</div>

</div>
<div class="pd-t-3"></div>
@endsection
<style>
  body{
    background: white !important;
    overflow-x: hidden;
  }
    .usercard-imagee{
        
        height: 525px;
        color: white;
        padding: 5%;
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        
    }
    
    .usercard-imagee:hover{
        transition:.1s;
        box-shadow:0 8px 8px 0 rgba(225, 226, 100, 0.37),0 6px 20px 0 rgba(255, 226, 100, 0.2);
        color: white;
        padding: 5%;
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        -webkit-filter:brightness(100%);
    }
    
    
    .cntent{
      color: #FFFFFF;
      font-family: Avenir;
      font-size: 48px;
      font-weight: 900;
      line-height: 50px;
      text-align: left;
    }
      .peh{
         color: #4A4A4A;
      font-family: Avenir-Book;
      font-size: 17px;
      font-weight: 500;
      line-height: 25px;
      margin-left: 2%;
      margin-right: 5%;
      }
      .p{
      color: #23201F;
      font-family: OpenSans;
      font-size: 18px;
      font-weight: 800;
      line-height: 22px;
      text-align: center;
    }
      .hh{
      color: #4A4A4A;
      font-family: Avenir;
      font-size: 32px;
      font-weight: 800;
      line-height: 50px;
      margin-left:  2%;
      }
    .img-icon{
      width: 2rem ;
      margin: 3%;
      margin-top: 5%;
      font-size: 30px;
      color: #4A4A4A;
    }
    .black{
        color: black;
    }
            
    .card-foto2{
        margin: 1%;
        background-image: url('{{asset('public/img/content/Asset/pixlip.jpg')}}');
        height: 523px;
        background-size: cover;
        width: 100%;
        background-position: center;
        color: white;
        margin: 1%;
    }
    .kotak2{
        width: 100%;
        background-color: #E4CC5E;
        opacity:0.9;
        height: 523px;
      }
    .card-foto1{
      margin: 1%;
      background:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.2)), url('{{asset('public/img/content/news/card3.png')}}') ;
      height: 255px;
      background-size: cover;
      width: 100%;
      background-position: center;
      color: white;
      text-decoration: white; 
   }
   .card-foto1:hover{
    -webkit-filter:brightness(100%); 
    transition:.1s;
    background:-webkit-linear-gradient(rgba(255, 226, 108, 0.9), rgba(255, 226, 100, 0.7), rgba(255, 226, 100, 0.6)),url('{{asset('public/img/content/news/card3.png')}}');
    /* background:-o-linear-gradient(rgba(255, 226, 108, 0.9), rgba(255, 226, 100, 0.7), rgba(255, 226, 100, 0.6)),url('{{asset('public/img/content/news/card3.png')}}');
    background:linear-gradient(rgba(255, 226, 108, 0.9), rgba(255, 226, 100, 0.7), rgba(255, 226, 100, 0.6)),url('{{asset('public/img/content/news/card3.png')}}'); */
    box-shadow:0 8px 8px 0 rgba(225, 226, 100, 0.37),0 6px 20px 0 rgba(255, 226, 100, 0.2);
    color: white;
    height: 255px;
    width: 100%;
    margin:1%;
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
    
    .item-a{
        margin: 1%;
        background-image: url('{{asset('public/img/content/Asset/Highlight2.jpg')}}');
        height: 500px;
        background-size: cover;
        width: 100%;
        background-position: center;
        color: white;
    }
    .item-b{
        margin: 1%;
          background-image: url('{{asset('public/img/content/Asset/Highlight1.jpg')}}');
        height: 500px;
        width: 100%;
        color: white;
        background-size: cover;
        background-position: right;
    }
  .item-c{
     background-image: url('{{asset('public/img/content/Asset/user2.png')}}');
     width: 100%;
     margin: 2%;
     color: black;
     height: 420px;
  }
  .item-d{
     background-image: url('{{asset('public/img/content/Asset/user1.png')}}');
     width: 100%;
     margin: 2%;
     color: black;
     height: 420px;
  }
    
  .item-e {
     background-image: url('{{asset('public/img/content/Asset/user3.png')}}');
     width: 100%;
     margin: 2%;
     color: black;
     height: 420px;
  }
  .mg-2{
    margin-left: 5%;
  }
  </style>