@extends('layouts.app')
@section('title','Mindstores | Contact us')
@section('css')
<link rel="stylesheet" href="{{asset('public/css/contact.css')}}">
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
  <div class="col-md-12 ">
    <br>
    <p class="text-center p" >Do not hesitate to drop us a message by filling out the form below for further information.</p>
    <p class="text-center d">We are more than happy to help you.</p>
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
<div class="row pd-t-3" >
  <div class="col-md-5 jumbotron " style="padding-left: 3%; background-color: #ffffff">
    <br>
  <form action="{{ route('send-msg') }}" method="post">
  @csrf
        <select  id="" name="topic" required style="" class=" rectangle-02 search " >      
          <option selected disabled style="font-weight: 900;"> Topic </option>
          <option value="partnership">Partnership</option>
          <option value="career">Careers</option>
        </select>
        <div class="pd-t-5 ">
          <p class="p" style="font-size: 20px;color: #9B9B9B">Name</p>
           <input type="text" name="name" required class="rectangle-01 search black">
        </div>
        <div class="pd-t-5 ">
           <p class="p" style="font-size: 20px;color: #9B9B9B">Email</p>
          <input type="email" name="email" required class="rectangle-01 search black">
       </div>
   </div>
   <div class="col-md-7  bg jumbotron" style="background-color: #323232;">
            <p class="p" style="color: #9B9B9B; font-size: 20px;">Messages</p>
            <textarea name="messages" style="font-weight: 600; outline: none"  placeholder="Type Your Message In Here.." class="rectanglee-1 search1 " id="" cols="30" rows="10"></textarea>
            <br><br><br>
            <p style="text-align: center;"><input type="submit" style="color:white;float: left" class="button button-2-b" value="Send Message"></p>
    </div>
  </form>
</div>
</div>
<div class="pd-t-3 bg-white"></div>
</div>
@endsection