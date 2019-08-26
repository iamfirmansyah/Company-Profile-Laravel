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
  <div class="container">
    <div class="row" align="">
      <div class="col-md-12">
        <div class="join-our-team-be-a text-center">
        <p>
          Join Our Team</p><p>  & Be A Part Of Something Big</p></div>
        <br> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 we-are-looking-for-c text-center">
        <p >
          We are looking for competent and talented individuals with good personality and attitude, willing to learn, proactive, able to work independently & in a team to meet set deadlines but most importantly, those who have deep passion and high creativity.</p>
        <p style="padding-top: 1%;">
          Submit your application with CV, portofolios, and most recent photo of your self to <b>halo@mymindstores.com</b>
        </p>
        <br>  
      </div>
    </div>
    <!-- SEARCH -->
    <form action="{{ route('search-careers') }}" method="get">
    <div class="row" align="center"> 
        <div class="col-md-5 col-xs-5" style="padding-top: 1%;">  
          <input type="text" style="padding-left: 20px;" name="career" placeholder="Type Career You’re Looking For" class="rectangle-2 search">
        </div>
        <div class="col-md-4 col-sx-4" style="padding-top: 1%;">  
             <select id="" name="location_option" class="rectangle-02 rectangel search" width="340px;">
               @foreach ($location as $career_location)  
             <option selected>{{ $career_location->location }}</option>                
               @endforeach
              </select>
         </div>
        <div class="col-md-3 col-sx-3" style="padding-top: 1%;">  
          <a href="" class="text-dark"><button type="" class="rectangle-03  read-more">Search</button></a></div>
        </div><br><br>   
      </form>

    <div class="row" align="center"> 
      <!-- CONTENT -->
      <?php $a = 1; ?>
      @foreach ($career as $item)
      <?php if ($a % 2 == 1) {?> 
        <div class="col-md-4" style="margin-top: 2%;">
            <div class="rectangle">  
              <div class="row ml-3"> 
                <div class="col-md-12"> 
                <br><p class="black-title font-weight-bold" style="height:65px; padding-right:10px;padding-top:5px;"><b>{{$item->job_title}}</b></p><br>  
              </div>
              <div class="row" style="margin: 1%;">
                  <div class="col-md-12">
                    <p class="business"><img src="{{asset('public/img/png/bg.png')}}" alt="" width="26px">   {{$item->division}}</p>
                    <p class="business"><img src="{{asset('public/img/png/lo-black.png')}}" alt="" width="26px">   {{$item->location}}</p>
                  </div>  
                  <div class="lorem" style="margin: 4%; margin-right:6%;"> {!! str_limit($item->description,100) !!}</div>          
              </div>
              <div class="row" > 
                <div class="col-md-12" style="margin-left:10px" >  
                <a href="{{ route('detail-career',[$item->year,$item->month,$item->id,$item->slug]) }}" class="text-white"><button class="button button-2-c text-dark" style="    padding: 18px 50px 18px 50px;">See Detail</button></a>
                </div>
            </div>
            </div>
          </div>
        </div>
    <?php }else{ ?>
      <div class="col-md-4" style="margin-top: 2%;">
          <div class="rectangle-black">  
            <div class="row ml-1"> 
              <div class="col-md-6">
              <br>
              <p  class="white-title font-weight-bold text-white" style="height:65px; padding-right:10px;padding-top:5px;"><b>{{$item->job_title}}</b></p><br>  
            </div>
            <div class="row" style="margin: 1%;">
                <div class="col-md-12">
                  <p class="business-black"><img src="{{asset('public/img/png/bag-whitee.png')}}" alt="" width="26px">   {{$item->division}}</p>
                   
                  <p class="business-black"><img src="{{asset('public/img/png/lo-white.png')}}" alt="" width="26px">   {{$item->location}}</p>
                </div>  
                <div class="lorem"  style="margin: 4%;color:#B3B3B3!important; margin-right:6%;">{!! str_limit($item->description,100) !!}</div>   
            </div>          
            <div class="row"> 
              <div class="col-md-12"  style="margin-left:10px">  
              <a href="{{ route('detail-career',[$item->year,$item->month,$item->id,$item->slug]) }}" class="text-white"><button class="button button-2-b text-white" style="    padding: 18px 50px 18px 50px;">See Detail</button></a>
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
  font-size: 19px;
  font-weight: 600;
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
  width: 385px;
  height: 445px;
}
    .business {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 19px;
  font-weight: 600;
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
  font-size: 18px;
  line-height: 24px;
  text-align: left;
  font-weight: 400;
  height: 90px
}
  .black-title {
  color: black;
  font-family: Avenir;
  font-size: 36px;
  line-height: 43px;
  text-align: left;
  width: 370px;
}
  .rectangle {
  background-color: #FAFAFA;
  width: 385px;
  height: 445px;
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
  min-width: 10px;
}

  .join-our-team-be-a {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 48px;
  font-weight: 900;
  line-height: 40px;
  text-align: left;
}

.we-are-looking-for-c {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 19px;
  font-weight: 400;
  line-height: 24px;
  text-align: center;
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
  .lorem {
  color: #9B9B9B;
  font-family: Avenir;
  font-size: 19px;
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
.search-show:hover{
  border:3px solid rgba(245, 245, 245, 0.623);
  font-weight:bold;
  color:#000;
  transform:scale(1.1);
  transition:.1s;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.37),0 6px 20px 0 rgba(0, 0, 0, 0.37);
}
@media(max-width: 900px){
  .rectangle-2 {
  background-color: #FFFFFF;
  border: 5px solid #4A4A4A;
  width: 350px;
  height: 80px;
  margin-left: 5%;
}
.rectangel{
  background-color: #FFFFFF;
  border: 5px solid #4A4A4A;
  width: 350px;
  height: 80px;
  margin-left: 5%;
}
.rectangle-03 {
  border: 5px solid #4A4A4A;
  width: 280px;
  height: 80px;
  margin-left: 6%;
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
 .join-our-team-be-a {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 28px;
  font-weight: 900;
  line-height: 25px;
  text-align: left;
}
.we-are-looking-for-c{
  font-size: 18px;
}
}
  </style>
@endsection