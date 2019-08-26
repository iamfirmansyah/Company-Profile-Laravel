@extends('layouts.news')
@section('title','Mindstores | News')
@section('content')

    <div class="container">
        <div class="row">
        {{-- <form class="d-none" action="{{ route('update.visit.count', $artikel->id) }}" method="post" id="postVisitCount">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $artikel->id }}">
                <input type="text" name="visit_count" value="{{ $artikel->visit_count }}" id="visitCount">
                <input type="submit" value="submit visit count">
        </form> --}}
            <div class="col-md-12 pd-t-3">
                <div class="row">
                    {{-- CONTENT ARTIKEL --}}
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-12 pd-t-1">                              
                                    {{-- IMAGE --}}
                                    <div class="gambar">
                                    <div style="background-image:url('{{ asset('public/upload/images/news/'.$artikel->foto) }}');
                                    height: 500px;">
                                    <a href="{{URL::previous()}}">
                                        <div class="button-back-artikel text-center"><i class="fas fa-arrow-left fa-2x"></i>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="col-md-12" style="border:2px solid #dbdbdb">
                                    <div class="row" style="margin-top:-40px;padding:2%;">
                                        <div class="col-md-4">
                                                <div class="category-text category-background p-4 text-white">
                                                    <h2>{{ucfirst($artikel->category->category)}}</h2>
                                                </div>
                                        </div>
                                        <div class="col-md-8" style="margin-top:30px;color: #9B9B9B;
                                        font-family: OpenSans;
                                        font-size: 20px;
                                        font-weight: 400;
                                        line-height: 24px;
                                        text-align: left;">
                                        <div class="row">
                                            <div class="col-md-4 text-right">
                                        {{ \Carbon\Carbon::parse($artikel->updated_at)->formatLocalized('%d %B %Y') }}
                                        </div>
                                        <div class="col-md-8">
                                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cbd2f377c165f77"></script>
                                                <div class="text-right addthis_inline_share_toolbox_d5fh"></div>
                                    </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-9">
                                    <div class="card-footer"><p class="h1 font-weight-bold">{{$artikel->title}}</p>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                  <img src="{{ asset('') }}" alt="">
                                  </div>
                                </div>
                              </div>
                            </div>
                                  {{-- ARTIKEL --}}
                                    <div class="p-t pd-t-5 content text-justify">
                                            {!! $artikel->news_detail !!}        
                                    </div>
                                    {{-- PENULIS --}}
                                    <p class="pd-t-3 p-t">Written By : {{$artikel->writer}}</p>
                                    {{-- SHARE ARTIKEL --}}
                                   <br>
                                {{-- <div class="row">
                                    <div class="col-md-12">
                                        <p class="jdlu">SHARE THIS ARTICLE</p>
                                        <div class="row">
                                            <div class="col-md-4 "> --}}
                                                <!-- Your share button code -->
                                            {{-- <div class="fb-share-button" 
                                            data-href="https://www.mymindstores.com/news/{{$artikel->year,$artikel->month,$artikel->id,$artikel->slug}}" 
                                              data-layout="button_count">
                                            </div> --}}
                                       {{-- <a href="https://twitter.com/share?url:http://www.mymindstores.com/news/{{$artikel->year,$artikel->month,$artikel->id,$artikel->slug}}" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                            <a href="">  --}}
                                                    {{-- <img class="ft-img-share" src="{{asset('img/content/fb-t-black.png')}}" alt=""></a>
                                                    <a href="">
                                                        <img class="ft-img-share" src="{{asset('img/content/tweet-t-black.png')}}" alt=""></a>
                                                    <a href="">
                                                        <img class="ft-img-share" src="{{asset('img/content/wa-t.png')}}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- CONTENT KANANN --}}
                    <div class="col-md-3 content-kanan">
                        
                            {{-- LATEST POST --}}
                            <div class="row">
                                <div class="col-md-12 pd-t-1">
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <p class="jdlu">Latest News </p>
                                                </div>
                                        </div>
                                        <div class="pd-t-1" style="border:2px solid #dbdbdb;">
                                            @foreach ($latests as $latest)                                        
                                        <a href="{{ route('detail-artikel',[$latest->year,$latest->month,$latest->id,$latest->slug]) }}">
                                                <div class="row p-2">
                                                    {{-- <div class="col-md-4">
                                                        <img src="{{asset('/upload/images/artikel/'.$latest->foto)}}" alt="No image" class="img-lt-kanan">
                                                    </div> --}}
                                                    <div class="col-md-12" style="margin-top">
                                                        {{-- <p class="jdlu">{{str_limit($latest->title,50)}}</p> --}}
                                                        <p style="font-weight:bold;font-size:18px">Grand Launching of Alfamind by Alfamart and Mindstores</p>
                                                        <p class="p-c">{{\Carbon\Carbon::parse($latest->updated_at)->formatLocalized('%d %B %Y')}}</p>
                                                    </div>
                                                </div>
                                            </a>                                        
                                            @endforeach
                                        </div>
                                </div>
                            </div>
                            {{-- Category --}}
                            <div class="row pd-t-5">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="jdlu">Categories</p>
                                         <div class="row">
                                            <div class="col-md-12">                                            
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
                                </div>
                            </div>
                            {{-- ARCHIVES --}}
                   <div class="row pd-t-5">
                       <div class="col-md-12">
                           <div class="row">
                               <div class="col-md-12">
                                   <p class="jdlu">Archives </p>
                                <div class="row">
                                   <div class="col-md-12">
                                       @foreach ($archiveMonth as $month)
                                            @foreach ($archiveYear as $year)
                                            <a href="{{ route('archive-artikel',[$year->year,$month->month]) }}">
                                            <p class="p-j">{{ \Carbon\Carbon::parse($month->updated_at)->formatLocalized('%B') }} {{ \Carbon\Carbon::parse($year->updated_at)->formatLocalized('%Y') }} </p>
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
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
@endsection
@section('scripts')
    
    <script>
        $(document).ready(function(){
            $.ajax({
                type: "post",
                url: "{{ route('update.visit.count') }}",
                data: {
                    '_token' : "{{ csrf_token() }}",
                    'id' : {{ $artikel->id }},
                    'visit_count' : {{ $artikel->visit_count }},
                },
                success: function (response) {
                  console.log('success');
                },
                error:function(response){
                    console.log('error');
                }
            });
        });
    </script>

@endsection