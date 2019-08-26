@extends('layouts.news')
@section('title','Mindstores | News')

@section('content')
    <div class="container">
        <div class="owl-carousel owl-theme">
            
                @foreach ($highlights as $highlight)
                @if ($highlight->style == 'right')
           <div class="item-a" style="background-image: url('{{asset('public/upload/images/highlight/'.$highlight->image)}}');" data-merge="6">
               <div class="row">
                   <div class="col-md-4">
                   </div>
                   <div class="col-md-8 col-sx-12 pd-t-3" style="padding-left:200px; padding-top: 100px;">
                       
                       <h1 class="pd-t-5 peeh {{ $highlight->text_style == 'white' ? 'text-white' : 'text-dark' }}">{{$highlight->title}}</h1>
                       <h4  style="margin-top:10px; font-size: 18px; padding-right: 11%;font-weight: 400" class="tix {{$highlight->text_style == 'white' ? 'text-white' : 'text-dark'}}">{!! str_limit($highlight->description,200) !!}</h4>
                                &nbsp;
                                @if($highlight->link != '')
                                    <p><a href="http://{{ $highlight->link }}" target="_blank" class="{{ $highlight->button_style  == 'black' ? 'text-white button button-2-b' : ( $highlight->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                                @elseif($highlight->link == '')
                                    <p><a href="{{ route('detail-artikel',[$highlight->news->year,$highlight->news->month,$highlight->news->id,$highlight->news->slug]) }}" class="{{ $highlight->button_style  == 'black' ? 'text-white button button-2-b' : ( $highlight->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                                @endif   
                   </div>
               </div>
           </div>
               @elseif($highlight->style == 'left')  
               <div class="item-b" style="background-image: url('{{asset('public/upload/images/highlight/'.$highlight->image)}}');" data-merge="5">
                   <div class="row">
                       <div class="col-md-6 pd-t-5" style="padding-left:60px;">                               
                               <h1 class="pd-t-5 {{ $highlight->text_style == 'white' ? 'text-white' : 'text-dark' }}">{{$highlight->title}}</h1>
                               <h4  style="margin-top:10px; font-size: 18px; padding-right: 11%;font-weight: 400" class="tix {{$highlight->text_style == 'white' ? 'text-white' : 'text-dark'}}">{!! str_limit($highlight->description,200) !!}</h4>
                                &nbsp;
                                @if($highlight->link != '')
                                    <p><a href="http://{{ $highlight->link }}" target="_blank" class="{{ $highlight->button_style  == 'black' ? 'text-white button button-2-b' : ( $highlight->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                                @elseif($highlight->link == '')
                                    <p><a href="{{ route('detail-artikel',[$highlight->news->year,$highlight->news->month,$highlight->news->id,$highlight->news->slug]) }}" class="{{ $highlight->button_style  == 'black' ? 'text-white button button-2-b' : ( $highlight->button_style == 'red' ? 'text-white button button-2-d' : 'text-dark button button-2-a') }}"><span>Read more</span></a></p>
                                @endif   
                       </div>        
                   </div>
               </div>
               @endif       
           @endforeach

        </div>
    </div>
    <div class="container" style="padding-bottom:10%;">
        <div class="row">
        <div class="col-md-12 pd-t-3" style="margin-top: 20px;">
            <div class="row">
                {{-- CONTENT --}}
                <div class="col-md-9">
                <h4 style="font-weight:720"><a href="{{ url('/news') }}"><i class="fas fa-arrow-left"></i></a> |   Archive : {{ \Carbon\Carbon::parse($ambilarchive->updated_at)->formatLocalized('%B') }} {{ \Carbon\Carbon::parse($ambilarchive->year)->formatLocalized('%Y') }}</h4>
                    {{-- CONTENT 1 --}}
                <div class="row">
                    @foreach ($archive as $artikel)
                    <div class="col-md-4 pd-t-3">
                    <a href="{{ route('detail-artikel',[$artikel->year,$artikel->month,$artikel->id,$artikel->slug]) }}" class="text-white">
                            
                            <div class="image-artikel gmbr" style="background-image:url('{{asset('public/upload/images/news/'.$artikel->foto)}}');background-size:100%;background-repeat:no-repeat;height:280px;width:100%">
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8 text-white" style="background:rgb(26,26,26);
                                    padding-top:13px;height:50px;text-align:center;">
                                        <p style="font-size: 14px; ;font-weight: 600;float: left;">{{ucfirst($artikel->category->category)}}</p>                                            
                                </div>
                                <div class="col-md-4 bg-light"><img class="" style="padding-top: 2px;" src="{{asset('public/upload/images/releasers/'.$artikel->releaser->foto)}}"  alt="" width="60px"></div>
                                </div>
                            </div>
                            {{-- <div class="col-md-12"> --}}
                            
                            {{-- </div> --}}
                            <div class="div h13" style="border:1px solid #dbdbdb">
                            <div class="" style="padding-top:10px;">
                            <h5 class="text-dark"  style="margin-left: 3%;margin-right: 10%;padding:%;font-weight:800;  font-family: OpenSans;padding-bottom: 10%;height:100px">{{str_limit($artikel->title,52)}}</h5>
                            <div class="col-md-12 bg-white">
                            <div class="row" style="padding-bottom:3%;">
                            <div class="col-md-6 text-secondary text-center" style=" font-family: OpenSans;  font-size: 14px;font-weight: 500; color: #9B9B9B;">{{ \Carbon\Carbon::parse($artikel->updated_at)->formatLocalized('%d %B %Y') }}</div>
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
                    {{ $archive->render() }}
        </div> 
                    {{-- BAGIAN KANANN --}}
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
                                                    <img src="{{asset('/public/upload/images/artikel/'.$latest->foto)}}" alt="No image" class="img-lt-kanan">
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
                                                        @foreach ($archiveMonth as $month)
                                                        @foreach ($archiveYear as $year)
                                                            
                                                <a href="{{ route('archive-artikel',[$year->year,$month->month]) }}">
                                                        <p class="p-j">{{ \Carbon\Carbon::parse($month->updated_at)->formatLocalized('%B') }} {{ \Carbon\Carbon::parse($year->updated_at)->formatLocalized('%Y') }}</p>
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
    </script>
@endsection


