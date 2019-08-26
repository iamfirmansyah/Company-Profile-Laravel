@extends('layouts.argon')
@section('title','Dashboard | Edit Highlight')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
            </div>
        </div>
    </div>    
<div class="container-fluid mt--8">
<div class="row">
    <div class="col-md-12">
       {!! Breadcrumbs::render('edithighlight',$getHighlight) !!}
    </div>    
</div>
<form action="{{ route('update-highlight',$getHighlight->id) }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach    
@endif
@if (session('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('warning') }}
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('pesan'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('pesan') }}
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="row">
    <div class="col-md-4" style="padding-left:3%;">
        <label for="" class="text-muted" style="font-size:18px;">Highlight Category</label>  
        <div class="form-group">
            <select class="form-control" name="category" style="border-radius: 1.375rem; color:black" id="high_cat">
                <option disabled>Highlight Category</option>
                @if ($getHighlight->category == 'News')                    
                <option value="News">News</option>
                <option value="Commercial">Commercial</option>
                @else
                <option value="Commercial">Commercial</option>
                <option value="News">News</option>
                @endif
            </select>
         </div>     
     </div>

    <div class="col-md-4"  style="padding-left:3%; ">
            <div class="form-group" >
            <label for="" class="text-muted" id="text-style" style="font-size:18px">Content Style</label>  
            <select class="form-control" name="style" id="select-style" style="border-radius: 1.375rem; color:black" id="exampleFormControlSelect1">
                <option disabled>Content Style</option>
                @if ($getHighlight->style == 'left')                    
                <option value="left">Description (Left)</option>
                <option value="right">Description (Right)</option>
                @else
                <option value="right">Description (Right)</option>
                <option value="left">Description (Left)</option>
                @endif
            </select>
         </div>     
     </div>
</div>
<div class="row" id="style2">
        <div class="col-md-4"  style="padding-left:3%; ">
                <div class="form-group" >
                <label for="" class="text-muted" id="text-style" style="font-size:18px">Text Style</label>  
                <select class="form-control" name="text_style" id="select-style" style="border-radius: 1.375rem; color:black" id="exampleFormControlSelect1">
                    <option disabled>Text Style</option>
                    @if ($getHighlight->text_style == 'white')
                    <option value="white">White</option>
                    <option value="black">Black</option>
                    @else
                    <option value="black">Black</option>
                    <option value="white">White</option>
                    @endif
                </select>
             </div>     
         </div>

    <div class="col-md-4"  style="padding-left:3%; ">
            <div class="form-group" >
            <label for="" class="text-muted" id="text-style" style="font-size:18px">Button Style</label>  
            <select class="form-control" name="button_style" id="select-style" style="border-radius: 1.375rem; color:black" id="exampleFormControlSelect1">
                <option disabled>Button Style</option>
                @if ($getHighlight->button_style == 'black')                    
                <option value="black">Button Black</option>
                <option value="white">Button White</option>
                <option value="red">Button Red</option>
                @elseif($getHighlight->button_style == 'white')
                <option value="white">Button White</option>
                <option value="black">Button Black</option>
                <option value="red">Button Red</option>            
                @else
                <option value="red">Button Red</option>            
                <option value="white">Button White</option>
                <option value="black">Button Black</option>
                @endif

            </select>
         </div>     
     </div>
</div>
<div class="row">
    <div class="col-md-12" style="padding-left:3%; "><br>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                <label for="" class="text-muted" style="font-size:14px">Banner Size 960 x 520. Max File size 50MB (JPEG/PNG)</label><br>
            <input type="hidden" name="imageLama" value="{{ $getHighlight->image }}">
                <input type="file" name="image" id="input-foto" class="form-control">
                <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
            </div>
        </div>
    </div>
</div>
<div class="row" id="news-content">
    <div class="col-md-12">
        <label for="" class="text-muted" style="font-size:18px">News Content</label><br>
        <div class="row" id="myForm">
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="check1" value="option1" >
                    <label class="form-check-label text-muted" for="exampleRadios1">
                      News From Mindstores
                    </label>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="check2" value="option2" >
                    <label class="form-check-label text-muted" for="exampleRadios1">
                      Direct Link
                    </label>
                  </div>
            </div>
        </div>
    </div>
</div>
<div class="row" id="news-content-select">
        <div class="col-md-8">
            <div class="form-group">
                <select class="form-control" name="news" id="news-content" style="border-radius: 1.375rem; color:black" id="exampleFormControlSelect1">
                    <option disabled>News from mindstores</option>
                    @foreach ($news as $new)
                    @if ($getHighlight->news_id == $new->id)
                    <option value="{{$new->id }}">{{$new->title}}</option>                
                    @else
                    <option value="{{$new->id }}">{{$new->title}}</option>
                    @endif
                    @endforeach
                </select>
             </div>     
         </div>
    </div>

<div class="row d-none" id="direct-link2">
        <div class="col-md-10"><br>
            <div class="form-group">
                <label for="" class="">Direct link</label>
                <input type="text" name="link" id="link" value="{{ $getHighlight->link }}" class="form-control" style="font-weight:600;color:black" placeholder="www.example.com...">
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-md-10"><br>
        <label for="" class="text-muted" style="font-size:18px">Highlight Title</label>  <br>
        <div class="form-group">
        <input type="text"  name="title" required value="{{ $getHighlight->title }}" class="form-control" style="font-weight:600;color:black" placeholder="Highlight title...">
        </div>
    </div>
</div>

<div class="row" id="description">
    <div class="col-md-12">
        <label for="" class="text-muted" style="font-size:18px; font-weight:600">Desctiption(140 Words)</label>
        <textarea name="description" class="ckeditor" id="ckeditor" cols="30" rows="10">{{ $getHighlight->description }}</textarea>
    </div>
</div>
&nbsp;
<div class="row">
        <div class="col-md-6 mx-auto">
            <input type="submit" class="btn btn-warning" value="Update">
            <a href="{{ url('/admin/highlight') }}"class="btn btn-danger">CANCEL</a>
        </div>
</div>
</form>

    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        $(document).ready(function(){
            $('#high_cat').on('change',function(){
                var cek = $('#high_cat :selected').text();
                if(cek == 'Commercial'){
                    // $('#style').addClass('d-none');
                    // $('#style2').addClass('d-none');
                    $('#news-content').addClass('d-none');
                    $('#news-content-select').addClass('d-none');                    
                    $('#direct-link2').removeClass('d-none');
                    $('#description').addClass('d-none');
                }else{
                    $('#content-style').removeClass('d-none');
                    $('#direct-link2').addClass('d-none');
                    $('#description').removeClass('d-none');
                    $('#news-content').removeClass('d-none');
                    // $('#style').removeClass('d-none');
                    // $('#style2').removeClass('d-none');
                }

            });
            // alert (cek);
                        
            $('#myForm input').on('change',function(){
                var radio = $('input[name=radio]:checked','#myForm').val();
                // alert(radio); 
                if(radio == 'option2'){
                    $('#direct-link2').removeClass('d-none');
                    $('#news-content-select').addClass('d-none');
                }else{
                    $('#news-content-select').removeClass('d-none');
                    $('#direct-link2').addClass('d-none');
                    $('#link').val('');
                }
            });


        });
    </script>
@endpush