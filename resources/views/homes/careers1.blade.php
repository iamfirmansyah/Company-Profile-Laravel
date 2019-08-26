@extends('layouts.app')
@section('title','Mindstores | Careers')
@section('nav')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<li class="nav-item">
    <a class="nav-link"   href="{{url('/our-work')}}"> <b>Our Work</b>  <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{url('/news')}}">News</a>
    </li>
    <li class="nav-item">
      <a class="nav-link font-weight-bold" id="whawedo" href="{{url('/careers')}}">Careers</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " id="about" href="{{url('/about-us')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " id="contact" href="{{url('/contact-us')}}">Contact Us</a>
      </li>
@endsection

@section('content')
  <div class="container pd-2">
    <div class="row">
      <div class="col-md-6">
        <p class="join-our-team-be-a"><b> 
          Join Our Team
          & Be A Part Of Something Big </b></p>
        <br> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="we-are-looking-for-c">
          We are looking for competent and talented individuals with good personality and attitude, willing to learn, proactive, able to work independently & in a team to meet set deadlines but most importantly, those who have deep passion and high creativity.</p><br>
        <p class="we-are-looking-for-c">
          Submit your application with CV, portofolios, and most recent photo of your self to <b>halo@mymindstores.com</b>
        </p>
        <br>  
      </div>
    </div>
    <!-- SEARCH -->
    <form action="{{ route('search-careers') }}" method="get">
    <div class="row"> 
        <div class="col-md-5">  
          <input type="text" required name="career" placeholder="     Type Career You’re Looking For" class="rectangle-2 search">
        </div>
        <div class="col-md-4">  
             <select id="" name="location_option" class="rectangle-02 search" width="340px;">
               @foreach ($location as $career_location)  
             <option selected>{{ $career_location->location }}</option>                
               @endforeach
              </select>
         </div>
        <div class="col-md-3">  
          <a href="" class="text-dark"><button type="" class="rectangle-03 read-more">Search</button></a></div>
        </div><br><br>   
      </form>

    <div class="row"> 
      <!-- CONTENT -->
      <?php $a = 1; ?>
      @foreach ($career as $item)
      <?php if ($a % 2 == 1) {?> 
        <div class="col-md-4">
            <div class="rectangle">  
              <div class="row ml-3"> 
                <div class="col-md-12" style="margin-bottom: 2%"> 
                <br><p class="black-title font-weight-bold"><b>{{$item->job_title}}</b></p><br>  
              </div>
              <div class="row m-lg-1">
                  <div class="col-md-12">
                    <p class="business"><img src="{{asset('public/img/png/bag-black.png')}}" alt="" width="24px">   {{$item->division}}</p>
                    <p class="business"><img src="{{asset('public/img/png/loc-black.png')}}" alt="" width="24px">   {{$item->location}}</p>
                  </div>  
                  &nbsp;&nbsp;
                  <h4>{!! str_limit($item->description,85) !!}</h4>                  
              </div>
              <div class="row"> 
                <div class="col-md-12">  
                <a href="{{ route('detail-career',[$item->year,$item->month,$item->id,$item->slug]) }}" class="text-white"><button class="rectangle-002 read-moree text-dark">See Detail</button></a>
                </div>
            </div>
            </div>
          </div>
        </div>
    <?php }else{ ?>
      <div class="col-md-4">
          <div class="rectangle-black">  
            <div class="row ml-3"> 
              <div class="col-md-8" style="margin-bottom: 2%">
              <br>
              <p  class="white-title font-weight-bold text-white"><b>{{$item->job_title}}</b></p><br>  
            </div>
            <div class="row m-lg-1">
                <div class="col-md-12">
                  <p class="business-black"><img src="{{asset('public/img/png/bag-white.png')}}" alt="" width="24px">   {{$item->division}}</p>
                   
                  <p class="business-black"><img src="{{asset('public/img/png/loc-white.png')}}" alt="" width="24px">   {{$item->location}}</p>
                </div>  
                <div class="lorem" style="color:white!important">{!! str_limit($item->description,100) !!}</div>   
            </div>          
            <div class="row"> 
              <div class="col-md-12">  
              <a href="{{ route('detail-career',[$item->year,$item->month,$item->id,$item->slug]) }}" class="text-white"><button class="rectangle-002-black read-more-white text-white">See Detail</button></a>
              </div>
          </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <?php $a++; ?>
   
    
    @endforeach
    <!-- CONTENT 2-->
          <!-- CONTENT 3-->

  </div>
</div>

<style>
    .read-more-white {
  color: #FFFFFF;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
  line-height: 24px;
  text-align: center;
}
.rectangle-002-black:hover{
  border:3px solid #262626;
  font-weight:bold;
  color:#000;
  transform:scale(1.1);
  transition:.1s;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.37),0 6px 20px 0 rgba(0, 0, 0, 0.37);
}
.rectangle-002:hover{
  border:3px solid rgba(245, 245, 245, 0.623);
  font-weight:bold;
  color:#000;
  transform:scale(1.1);
  transition:.1s;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.37),0 6px 20px 0 rgba(0, 0, 0, 0.37);
}
    .white-title {
  color: #FFFFFF;
  font-family: Avenir;
  font-size: 36px;
  font-weight: 900;
  line-height: 43px;
  width: 367px;
  text-align: left;
}
    .business-black {
  color: #FFFFFF;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 400;
  line-height: 24px;
  text-align: left;
}
    .rectangle-002-black {
  border: 5px solid #FFFFFF;
  width: 240px;
  height: 80px;
  margin-left:5%;
  background-color: #323232 
}
    .rectangle-black {
  background-color: #323232;
  width: 380px;
  height: 440px;
}
    .business {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 400;
  line-height: 24px;
  text-align: left;
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
    .rectangle-002 {
  border: 5px solid #4A4A4A;
  width: 240px;
  height: 80px;
    margin-left:5%;
}
  .lorem {
  color: #9B9B9B;
  font-family: Avenir;
  font-size: 19px;
  line-height: 24px;
  text-align: left;
}
  .black-title {
  color: black;
  font-family: Avenir;
  font-size: 36px;
  line-height: 43px;
  text-align: left;
}
  .rectangle {
  background-color: #FAFAFA;
  width: 380px;
  height: 440px;
}
  .rectangle-02 {
  background-color: #FFFFFF;
  border: 5px solid #4A4A4A;
  width: 340px;
  height: 80px;
  margin-left: 20%;
}
.rectangle-03 {
  border: 5px solid #4A4A4A;
  width: 280px;
  height: 80px;
  margin-left: 10%;
  background-color: white;   
}
.rectangle-03:hover{
  border:3px solid rgba(245, 245, 245, 0.623);
  font-weight:bold;
  color:#000;
  transform:scale(1.1);
  transition:.1s;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.37),0 6px 20px 0 rgba(0, 0, 0, 0.37);
}
.read-more {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
  line-height: 24px;
  text-align: center;
}
  body{
    background-color: white;
    margin: 0;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    overflow-x: hidden;
  }
  .rectangle-2 {
  background-color: #FFFFFF;
  border: 5px solid #4A4A4A;
  width: 540px;
  height: 80px;
  margin-left: 5%;
}
  .join-our-team-be-a {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 48px;
  font-weight: 900;
  line-height: 50px;
  text-align: left;
}

.we-are-looking-for-c {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 400;
  line-height: 24px;
  text-align: left;
}
.search {
  color: #9B9B9B;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
  line-height: 24px;
  text-align: left;
  padding-left: 2%;
}
.search {
  color: #9B9B9B;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
  line-height: 24px;
  text-align: left;
  padding-left: 2%;
}
.search-show:hover{
  border:3px solid rgba(245, 245, 245, 0.623);
  font-weight:bold;
  color:#000;
  transform:scale(1.1);
  transition:.1s;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.37),0 6px 20px 0 rgba(0, 0, 0, 0.37);
}
  </style>
@endsection