@extends('layouts.app')
@section('title','Mindstores | Contact us')
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
      <a class="nav-link" id="about" href="{{url('/about-us')}}">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="font-weight:bold;" id="contact" href="{{url('/contact-us')}}">Contact Us</a>
      </li>
@endsection
@section('content')
<div class="body bg-white">
<!-- Container element -->
<div class="container ">
  <div class="row">
  <div class="col-md-12 ">
    <h1 class="jdl text-center"><strong>Need Help? Send Us Message.</strong></h1>
  </div>
</div>
<div class="row">
  <div class="col-md-6 offset-2 ">
    <br>
    <p class="p text-center" >Do not hesitate to drop us a message by filling out the form below for further information.
We are more than happy to help you.</p>
  </div>
</div>
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
<div class="row pd-t-3">
  <div class="col-md-5">
    <br>
  <form action="{{ route('send-msg') }}" method="post">
  @csrf
        <select  id="" name="topic" style="" class=" rectangle-02 search " >      
          <option selected disabled>Topic</option>
          <option value="partnership">Partnership</option>
          <option value="career">Careers</option>
        </select>
        <div class="pd-t-5 ">
          <p class="p" style="font-size: 20px;color: #9B9B9B">Name</p>
           <input type="text" name="name" class="rectangle-01 search black">
        </div>
        <div class="pd-t-5 ">
           <p class="p" style="font-size: 20px;color: #9B9B9B">Email</p>
          <input type="email" name="email" class="rectangle-01 search black">
       </div>
   </div>
  
   <div class="col-md-7 bg jumbotron" style="background-color: #323232;">
            <p class="p" style="color: #9B9B9B; font-size: 20px;">Messages</p>
            <textarea name="messages"  placeholder="Type Your Message In Here.." class="rectanglee-1 search1 " id="" cols="30" rows="10"></textarea>
                <br><br><br>
            <p style="text-align: center;"><input type="submit" style="color:white;float: left" class="button button-2-b" value="Send Message"></p>
    </div>
  </form>
</div>
</div>
<div class="pd-t-3 bg-white"></div>
</div>
@endsection
<style>

.jumbotron{
  background-color: #323232;!important
}
  .bg{
    background-color: #323232;
  }
  .pe{
    color: white; 
    font-size: 17px;
    font-weight: 800;
    line-height: 28px;
  }
  body{
    background-color: white !important;
    overflow-x: hidden;
  }
  .p{
     color: #4A4A4A;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
  line-height: 24px;
  width: 900px;
  }
  .jdl{
  color: #4A4A4A;
  font-family: Avenir;
  font-size: 50px;
  font-weight: 800;
  line-height: 50px;
  text-align: center;
  }
    .rectangle-02 {
  background-color: #FFFFFF;
  border: 5px solid #4A4A4A;
  width: 340px;
  height: 80px;
}
  .rectangle-01 {
  background-color: #FFFFFF;
  border:none;
  border-bottom:  2px solid #9B9B9B;
  width: 340px;
  height: 30px;

}
  .rectanglee-1 {
  background-color:  #323232;;
  border:none;
  border-bottom:  2px solid white;
  width: 100%;
  height: 350px;
  color: white
}
.search-1 {
  margin-top: 2%;
  color: ;
  font-family: Avenir;
  font-size: 10px;
  font-weight: 800;
  line-height: 24px;
  text-align: left;
  padding-left: 2%;
}

.search {
  margin-top: 2%;
  color: #9B9B9B;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 800;
  line-height: 24px;
  text-align: left;
  padding-left: 2%;
}
.black{
    color: black;
}
</style>