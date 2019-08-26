@extends('layouts.app')

@section('title','Login')
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
<div class="container" style="margin-bottom: 100px;margin-top: 50px">
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header F text-center">{{ __('Login') }}</div>

                <div class="card-body F">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="font-weight: 600">
                                    {{ __('Login') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('public/img/logobaru.png')}}" width="300px" alt="">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        </div>
    </div>
</div>
<style>
    body{
        overflow-x: hidden !important;
        background-color: white;
    }
    .F{
        font-weight: 600;
    }
</style>
@endsection
