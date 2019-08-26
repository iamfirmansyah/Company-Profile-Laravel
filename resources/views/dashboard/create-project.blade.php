@extends('layouts.argon')
@section('title','Dashboard | Create Project')
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
       {!! Breadcrumbs::render('addproject') !!}
    </div>    
</div>
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
<form action="{{ route('create-project') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-10" style="padding-left:3%; ">
            <label for="" class="">Project Name</label>  <br>
            <div class="form-group">
                <input type="text" name="project_name" class="form-control" placeholder="Project Name">
            </div>
        </div>
    </div>
    <div class="row" id="style">
        <div class="col-md-6"  style="padding-left:3%; ">
            <div class="form-group" >
                <label for="" class="text-muted" id="text-style" style="font-size:18px">Content Style</label>  
                <select class="form-control" name="style" id="select-style" style="border-radius: 1.375rem; color:black" id="exampleFormControlSelect1">
                    <option disabled>Content Style</option>
                    <option value="left">Description (Left)</option>
                    <option value="right">Description (Right)</option>
                </select>
            </div>     
        </div>
        <div class="col-md-4">
            <div class="form-group" >
                <label for="" class="text-muted" id="text-style" style="font-size:18px">Text Style</label>  
                <select class="form-control" name="text_style" id="select-style" style="border-radius: 1.375rem; color:black" id="exampleFormControlSelect1">
                    <option disabled>Text Style</option>
                    <option value="white">White</option>
                    <option value="black">Black</option>
                </select>
            </div>     
        </div>
    </div>
    <div class="row" id="style3">
            <div class="col-md-4"  style="padding-left:3%; ">
                    <div class="form-group" >
                    <label for="" class="text-muted" id="text-style" style="font-size:18px">Button Style</label>  
                    <select class="form-control" name="button_style" id="select-style" style="border-radius: 1.375rem; color:black" id="exampleFormControlSelect1">
                        <option disabled>Button Style</option>
                        <option value="white">Button White</option>
                        <option value="red">Button Red</option>
                        <option value="black">Button Black</option>
                    </select>
                 </div>     
             </div>
        </div>
<div class="row">
    <div class="col-md-12" style="padding-left:3%; "><br>
        <div class="row">
            <div class="col-md-10">
                <label for="" class="text-muted">Title</label>  <br>
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                <label for="" class="text-muted" style="font-size:14px"> <i>Banner Size 1320 x 520. Max File size 50MB (JPEG/PNG)</i></label><br>
                <input type="file" name="image" id="input-foto" class="form-control btn btn-warning">
                <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
            </div>
        </div>
        
        
        <br>
    </div>
</div>
<label class="text-muted">Contents</label>
<section id="section1">
    <div class="row card">
        <div class="col-md-12">
            <div class="ml-2 mt-2">
                <div class="row">
                        <div class="col-10">
                                <label class=" font-weight-bold">Section 1</label>
                            </div>
                            {{-- <div class="col-2">
                                <div class="float-right">
                                    <button type="button" class="btn btn-danger close-1" data-effect="fadeOut"><i class="fa fa-times"></i></button>
                                </div>
                            </div> --}}
                </div>
                
                    <div class="form-group">
                            <h5 class="text-muted">Text</h5>                            
                        <h5 class="text-muted">Description</h5>
                        <textarea name="first_description" id="ckeditor" class="ckeditor" cols="30" rows="10"></textarea>
                    </div>
                   
            </div>
        </div>
    </div>
</section>
&nbsp;
<section id="section2">
    <div class="row card">
        <div class="col-md-12">
            <div class="ml-2 mt-2">
                <div class="row">
                        <div class="col-10">
                                <label class=" font-weight-bold">Section 2</label>
                            </div>
                            {{-- <div class="col-2">
                                <div class="float-right">
                                    <button type="button" class="btn btn-danger close-2" data-effect="fadeOut"><i class="fa fa-times"></i></button>
                                </div>
                            </div> --}}
                </div>
                
                    <div class="form-group">
                            <h5 class="text-muted">Image</h5>
                            <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                        <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                        1.<input type="file" name="image_only1" id="input-foto" class="form-control btn btn-warning">
                                        <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                                    </div>
                                    <div class="col-md-6 form-group">
                                            <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                            <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                            2.<input type="file" name="image_only2" id="input-foto" class="form-control btn btn-warning">
                                            <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                                        </div>
                                </div>
                            <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                        <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                        3.<input type="file" name="image_only3" id="input-foto" class="form-control btn btn-warning">
                                        <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                                    </div>
                                    <div class="col-md-6 form-group">
                                            <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                            <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                            4.<input type="file" name="image_only4" id="input-foto" class="form-control btn btn-warning">
                                            <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                                    </div>
                            </div> 
                            <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                        <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                        5.<input type="file" name="image_only5" id="input-foto" class="form-control btn btn-warning">
                                        <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                                    </div>
                                    <div class="col-md-6 form-group">
                                            <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                            <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                            6.<input type="file" name="image_only6" id="input-foto" class="form-control btn btn-warning">
                                            <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                                    </div>
                            </div>                                     
                    </div>
                    
            </div>
        </div>
    </div>
</section>
&nbsp;
{{-- <section id="section3" class="d-none">
    <div class="row card">
        <div class="col-md-12">
            <div class="ml-2 mt-2">
                <div class="row">
                        <div class="col-10">
                                <label class=" font-weight-bold">Section 3</label>
                            </div>
                            <div class="col-2">
                                <div class="float-right">
                                    <button type="button" class="btn btn-danger close-3" data-effect="fadeOut"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                </div>
                
                    <div class="form-group">
                            <h5 class="text-muted">Section Style</h5>
                            <select class="form-control col-3" name="style_n" style="border-radius: 1.375rem;" id="exampleFormControlSelect1">
                           <option disabled>Section Style</option>
                           <option value="none">Description without Image</option>
                       </select>
                    </div>
                
                    <div class="form-group">
                        <h5 class="text-muted">Description</h5>
                        <textarea name="description_n" id="ckeditor" class="ckeditor" cols="30" rows="10"></textarea>
                    </div>
                   
            </div>
        </div>
    </div>
</section>
&nbsp;
<section id="section4" class="d-none">
    <div class="row card">
        <div class="col-md-12">
            <div class="ml-2 mt-2">
                <div class="row">
                        <div class="col-10">
                                <label class=" font-weight-bold">Section 4</label>
                            </div>
                            <div class="col-2">
                                <div class="float-right">
                                    <button type="button" class="btn btn-danger close-4" data-effect="fadeOut"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                </div>
                
                    <div class="form-group">
                            <h5 class="text-muted">Section Style</h5>   
                            <select class="form-control col-3" name="style_n" style="border-radius: 1.375rem;" id="exampleFormControlSelect1">
                           <option disabled>Section Style</option>
                           <option value="image">Image Only</option>
                       </select>
                    </div>
                
                    <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                <input type="file" name="image_only1" id="input-foto" class="form-control btn btn-warning">
                                <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                            </div>
                            <div class="col-md-6 form-group">
                                    <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                    <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                    <input type="file" name="image_only2" id="input-foto" class="form-control btn btn-warning">
                                    <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                                </div>
                        </div>
                    <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                <input type="file" name="image_only3" id="input-foto" class="form-control btn btn-warning">
                                <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                            </div>
                            <div class="col-md-6 form-group">
                                    <label for="" class="text-muted" style="font-size:14px">Upload Banner Image </label>
                                    <label for="" class="text-muted" style="font-size:14px">Banner Size 500 x 320. Max File size 50MB (JPEG/PNG)</label><br>
                                    <input type="file" name="image_only4" id="input-foto" class="form-control btn btn-warning">
                                    <img src="" class="d-none" id="preview-foto" alt="foto" width="500px">
                            </div>
                    </div>                   
            </div>
        </div>
    </div>
</section> --}}
{{-- <br>    
<div class="row">
        <div class="col-md-6 mx-auto">
                <button class="btn btn-warning ml-3 add-content">Add More Content</button>
        </div>
    </div> --}}
    <br>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <input type="submit" class="btn btn-warning" value="SUBMIT ">
            <a href="{{ url('/admin/projects') }}"class="btn btn-danger">CANCEL</a>
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
            $('.close-1').click(function(){
                $(this).closest('#section1').fadeOut();
            });

            $('.close-2').click(function(){
                $('.add-content').removeClass('d-none');
                $('#section2').addClass('d-none').fadeOut();
            });

            $('.close-3').click(function(){
                $('.add-content').removeClass('d-none');
                $('#section3').addClass('d-none').fadeOut();
            });

            $('.close-4').click(function(){
                $('.add-content').removeClass('d-none');
                $('#section4').addClass('d-none').fadeOut();
            });

            $('.add-content').click(function(e){
                e.preventDefault();
                $(this).addClass('d-none');
                $('#section2').removeClass('d-none');
                $('#section3').removeClass('d-none');
                $('#section4').removeClass('d-none');
            });
        });
    </script>
@endpush