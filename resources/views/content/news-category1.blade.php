@extends('layouts.news')
@if ($artikel->count() == "0")
@section('title','Not Found')
@endif
@section('title','Mindstores | News')
@section('content')
<style>
        .item-a{
            height: 500px;
            background-size: cover;
            width: 100%;
            background-position: center;
            color: white;
        }
        .item-b{
            height: 500px;
            width: 100%;
            color: white;
            background-size: cover;
            background-position: right;
        }
        body{
            overflow-x: hidden;
        }
        .contnt{
                width:100%;
                min-width: 5%;
                max-width: 200%;
            }
    </style>
    
    <div class="container">
        <div class="owl-carousel owl-theme">
                @foreach ($highlights as $highlight)
                @if ($highlight->style == 'right')
           <div class="item-a" style="background-image: url('{{asset('public/upload/images/highlight/'.$highlight->image)}}');" data-merge="4">
               <div class="row">
                   <div class="col-md-6">
                   </div>
                   <div class="col-md-6 pd-t-5" style="padding-left:50px;">
                       <h4 class="{{ $highlight->text_style == 'white' ? 'text-white' : 'text-dark' }}">Project Name</h4>
                       <h1 class="pd-t-5 {{ $highlight->text_style == 'white' ? 'text-white' : 'text-dark' }}">{{$highlight->title}}</h1>
                       <p style="text-align: left;"><a class="{{ $highlight->button_style  == 'black' ? 'text-white button button-2-b' : ( $highlight->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}" href="{{ route('detail-artikel',[$highlight->news->year,$highlight->news->month,$highlight->news->id,$highlight->news->slug]) }}">Read More</a></p>   
                   </div>
               </div>
           </div>
               @elseif($highlight->style == 'left')  
               <div class="item-b" style="background-image: url('{{asset('public/upload/images/highlight/'.$highlight->image)}}');" data-merge="5">
                   <div class="row">
                       <div class="col-md-6 pd-t-5" style="padding-left:60px;">
                               <h4 class="{{ $highlight->text_style == 'white' ? 'text-white' : 'text-dark' }}">Project Name</h4>
                               <h1 class="pd-t-5 {{ $highlight->text_style == 'white' ? 'text-white' : 'text-dark' }}">{{$highlight->title}}</h1>
                               <p style="text-align: left;"><a class="{{ $highlight->button_style  == 'black' ? 'text-white button button-2-b' : ( $highlight->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}" href="{{ route('detail-artikel',[$highlight->news->year,$highlight->news->month,$highlight->news->id,$highlight->news->slug]) }}">Read More</a></p>   
                       </div>        
                   </div>
               </div>
               @endif       
           @endforeach        
        </div>
    </div>
    <div class="container" style="padding-bottom:10%;">
        <div class="row">
        <div class="col-md-12 pd-t-3">
            <div class="row">
                {{-- CONTENT --}}
                <div class="col-md-9">

                    {{-- CONTENT 1 --}}
                    @foreach ($namecategory as $categoryitem)                        
                <h4 style="font-weight:720">Category : {{ ucfirst($categoryitem->category->category) }}</h4>
                    @endforeach
                <div class="row">
                    @foreach ($artikel as $item)
                    <div class="col-md-4 pd-t-3">
                    <a href="{{ route('detail-artikel',[$item->year,$item->month,$item->id,$item->slug]) }}" class="text-white">
                            
                            <div class="image-artikel" style="background-image:url('{{ asset('public/upload/images/news/'.$item->foto) }}');background-size:100%;background-repeat:no-repeat;height:280px;width:100%">
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8 text-white" style="background:rgb(26,26,26);
                                    padding-top:13px;height:50px;text-align:center;">
                                    <p>{{ ucfirst($item->category->category) }}</p> 
                                </div>
                                <div class="col-md-4 " style="background:white;padding-top:13px;"><img class="contnt" src="{{asset('public/img/content/logo/alfamart.png')}}"  alt=""></div>
                                </div>
                            </div>
                            {{-- <div class="col-md-12"> --}}
                            
                            {{-- </div> --}}
                            <div class="div" style="border:1px solid #dbdbdb;height:120px">
                            <div class="" style="padding-top:10px;">
                            <h5 class="text-dark" style="padding:2%;font-weight:bold">{{str_limit($item->title,55)}}</h5>
                            <div class="col-md-12 bg-white">
                            <div class="row" style="padding-bottom:3%;">
                            <div class="col-md-6 text-secondary text-center">{{ \Carbon\Carbon::parse($item->updated_at)->formatLocalized('%d %B %Y') }}</div>
                                <div class="col-md-6 text-dark" style="">
                                    <div class="row text-secondary text-center">
                                        <div class="col"> <i class="fab fa-facebook-f"></i> </div>
                                        <div class="col"> <i class="fab fa-twitter"></i> </div>
                                        <div class="col"> <i class="fab fa-whatsapp"></i> </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                    </a>
                        </div>
                        @endforeach
                    </div>
                    &nbsp;
                    {{ $artikel->render() }}
            {{-- CONTENT 2 --}}

            

            
            
            
            {{-- PENUTUP DIV KONTEN  --}}
        </div> 
            {{--  --}}


                    {{-- CONTENT KANANN --}}
                    <div class="col-md-3 content-kanan">
                        
                        {{-- LATEST POST --}}
                        <div class="row ">
                            <div class="col-md-12">
                                    <div class="row">
                                            <div class="col-md-12">
                                                <p class="jdlu">Latest News </p>
                                            </div>
                                        </div>
                                        <div class="pd-t-1" style="border:2px solid #dbdbdb;margin-top:32px;">
                                        @foreach ($latests as $latest)                                        
                                    <a href="{{ route('detail-artikel',[$latest->year,$latest->month,$latest->id,$latest->slug]) }}">
                                            <div class="row p-2">
                                                {{-- <div class="col-md-4">
                                                    <img src="{{asset('public//upload/images/artikel/'.$latest->foto)}}" alt="No image" class="img-lt-kanan">
                                                </div> --}}
                                                <div class="col-md-12" style="margin-top">
                                                    {{-- <p class="jdlu">{{str_limit($latest->title,50)}}</p> --}}
                                                    <p style="font-weight:bold;font-size:18px text-justify">{{str_limit($latest->title,50)}}</p>
                                                    <p class="p-c">{{\Carbon\Carbon::parse($latest->updated_at)->formatLocalized('%d %B %Y')}}</p>
                                                </div>
                                            </div>
                                        </a>                                        
                                        @endforeach
                                    </div>
                            </div>
                        </div>

                        {{-- categories --}}
                        <div class="row pd-t-5">
                            <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="jdlu">CATEGORIES </p>
                                            @foreach ($kategori as $namecat)
                                            <a href="{{ route('category-artikel',[$namecat->year,$namecat->month,$namecat->id,$namecat->category]) }}">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                        <p class="p-j">{{ ucfirst($namecat->category->category) }}</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <p class="p-j">{{ $namecat->where('category_id',$namecat->category->id)->count() }}</p>
                                                    </div>
                                                    </div>     
                                                </a>
                                                @endforeach
                                        </div>
                                    </div>
                            </div>
                        </div>
                        {{-- ARCHIVES --}}
                        <div class="row pd-t-5">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="jdlu">ARCHIVES </p>
                                        <div class="row">
                                                <div class="col-md-12">
                                            @foreach ($archiveMonth as $item)
                                                @foreach ($archiveYear as $year)
                                                            
                                            <a href="{{ route('archive-artikel',[$year->year,$item->month]) }}">
                                                <p class="p-j">{{ \Carbon\Carbon::parse($item->updated_at)->formatLocalized('%B') }} {{ \Carbon\Carbon::parse($year->updated_at)->formatLocalized('%Y') }}</p>
                                            </a>
                                                @endforeach
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@section('scripts')
    
    <script>
        $('.owl-carousel').owlCarousel({
            loop : true,   
            autoWidht:true,
            merge : true, 
            responsive : {
                0:{
                    items : 1           
                },
                600 : {
                    items : 1
                },
                1000 : {
                    items : 5
                }
            }
        });
        // var owl = $('.owl-carousel');
        // owl.on('mousewheel', '.owl-stage', function (e) {
        //     if (e.deltaY>0) {
        //         owl.trigger('next.owl');
        //     } else {
        //         owl.trigger('prev.owl');
        //     }
        //     e.preventDefault();
        // });
    </script>

@endsection
