@extends('layouts.app')
@section('title','Mindstores | Career')
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
<div class="row"> 
<div class="col-md-12" style="color: black;font-size: 18px; font-weight: 900"> 
  {!! Breadcrumbs::render('detailcareer',$detailCareer) !!}
</div> 
</div>
    <div class="row pd-3"> 
<div class="col-md-8 ">
    <div class="row" style="margin-left: 1px;"> 
            <div class="col-md-12"> 
    <p class="description"> Description</p>
<span class="minimum-3-three">  
{!! $detailCareer->description !!}
</span><br>

        </div>
        <div class="row"> 
            <div class="col-md-12"> 
                    <p class="description">Requirements</p>
                    <span class="minimum-3-three">  
                    {!! $detailCareer->requirement !!}
                    </span>
            </div>
        </div>
    </div>
</div>
    
    <div class="col-md-4">  
        <div class="row"> 
            <div class="col-md-12 rectangle-1a"  style="margin-bottom: 5%"><br>   
              <p class="project-manager" style="margin: 5%;"> <b> {{$detailCareer->job_title}} </b></p>
              <div class="" style="margin:5%;">
                <p class="business"><img src="{{asset('public/img/png/bg.png')}}" alt="" width="26px">   {{$detailCareer->division}}</p>
                <p class="business"><img src="{{asset('public/img/png/lo-black.png')}}" alt="" width="26px">    {{$detailCareer->location}}</p>
              </div>
            </div>
        </div>
        <div class="row"> 
          <div class="col-md-12 rectangle-6-copy-2"> 
            <p class="need-further-informa"> Need further information about us?</p><br> 
                        <p style="padding-left: 5%;"><a href="{{url('/contact-us')}}" class="text-white button button-2-b" style="padding: 18px 60px 18px 60px;"><span>Contact Us</span></a></p>   
          </div>

        </div>

    </div>
      
    </div>
</div>

<style>
      .business {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 17px;
  font-weight: 600;
  line-height: 24px;
  text-align: left;
}
  .rectangle-2 {
  border: 5px solid #FFFFFF;
  width: 253px;
  height: 80px;
}
  .need-further-informa {
  color: #FFFFFF;
  font-family: Avenir;
  font-size: 36px;
  font-weight: 900;
  line-height: 48px;
  width: 387px;
  text-align: left;
  padding-top: 15%;
  margin: 5%;
  margin-right: 7%;
}
  .rectangle-6-copy-2 {
  background-color: #323232;
  width: 420px;
  height: 354px;
}
  .project-manager {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 36px;
  font-weight: 900;
  line-height: 43px;
  width: 367px;
  text-align: left;
}
  .rectangle {
  background-color: #FAFAFA;
  width: 420px;
  height: ;
}
  .minimum-3-three {
  color: #9B9B9B;
  font-family: Avenir;
  font-size: 18px;
  font-weight: 400;
  line-height: 24px;
  width: 860px;
  text-align: left;
}
  .description {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 24px;
  font-weight: 900;
  line-height: 29px;
  text-align: left;
}
.rectangle {
  background-color: #FAFAFA;
  width: 1320px;
  height: 60px;
} 
.careers {
  padding-top: 1.5%;
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
}
.ui-ux-designer {
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
  line-height: 24px;
  text-align: left;
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
  @media(max-width: 900px){
  .minimum-3-three {
  color: #9B9B9B;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 400;
  line-height: 24px;
  width: 860px;
  text-align: left;
}
  }
</style>
@endsection
@section('scripts')
    
  <script>
    $(document).ready(function(){
      $.ajax({
        type: "post",
        url: "{{ route('update.visit.count.job') }}",
        data: {
          '_token' : "{{ csrf_token() }}",
          'id' : {{ $detailCareer->id }},
          'visit_count' : {{ $detailCareer->visit_count }}
        },
        success: function (response) {
          
        }
      });
    });
  </script>

@endsection