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
    <form action="" method="post">
        <div class="row">
            {{-- This for master --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="project_name">Project Name</label>
                    <input type="text" name="project_name" id="project_name" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <label for="text_color">Text Color</label>
                        <select name="text_color" id="text_color" class="custom-select">
                            <option value="white">White</option>
                            <option value="black">Black</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="button_color">Button Color</label>
                            <select name="button_color" id="button_color" class="custom-select">
                                <option value="white">White</option>
                                <option value="black">Black</option>
                                <option value="red">Red</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            {{-- This for section --}}
            <div class="col-md-12">
                <hr>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        Section
                    </div>
                    <div class="col-md-6 text-right">
                        <select name="style" id="style" class="custom-select">
                            <option value="optTextOnly" id="optTextOnly">Text Only</option>
                            <option value="optLeftPicture" id="optLeftPicture">Left Picture</option>
                            <option value="optRightPicture" id="optRightPicture">Right Picture</option>
                            <option value="optPictureOnly" id="optPictureOnly">Pictures Only</option>
                        </select>
                        <button type="button" id="btnPilihStyle" class="btn btn-warning btn-sm"><i class="fa fa-plus"></i> Tambah Section Content</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row" id="sectionForm">
                    
                </div>
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

            var ratakanan = '<div class="col-md-12"><button id="btnRemove" type="button" class="btn btn-danger btn-sm" data-id="optRightPicture" data-name="Right Picture"><i class="fa fa-window-close"></i></button><div class="form-group"><label for="image">Image</label><input type="file" name="image" id="image" class="form-control"></div><div class="form-group"><label for="text">Text</label><textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea></div></div>';
            var ratakiri = '<div class="col-md-12"><button id="btnRemove" type="button" class="btn btn-danger btn-sm" data-id="optLeftPicture" data-name="Left Picture"><i class="fa fa-window-close"></i></button><div class="form-group"><label for="image">Image</label><input type="file" name="image" id="image" class="form-control"></div><div class="form-group"><label for="text">Text</label><textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea></div></div>';
            var pictures = '<div class="col-md-12"><button id="btnRemove" type="button" class="btn btn-danger btn-sm" data-id="optPictureOnly" data-name="Picture Only"><i class="fa fa-window-close"></i></button><div class="form-group"><label for="image">Image</label><input type="file" name="image" id="image" class="form-control"></div><div class="form-group"><label for="image">Image</label><input type="file" name="image" id="image" class="form-control"></div><div class="form-group"><label for="image">Image</label><input type="file" name="image" id="image" class="form-control"></div><div class="form-group"><label for="image">Image</label><input type="file" name="image" id="image" class="form-control"></div></div>';

            var textonly = '<div class="col-md-12"><button id="btnRemove" type="button" class="btn btn-danger btn-sm" data-id="optTextOnly" data-name="Text Only"><i class="fa fa-window-close"></i></button><div class="form-group"><label for="text">Text</label><textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea></div></div>';

            var used = [];

            $('body').on('click', '#btnRemove', function(){
                $('#style').append('<option value="' + $(this).data('id') +'" id="' + $(this).data('id') +'">' + $(this).data('name') + '</option>')
                $(this).closest('div').remove();
            });

            $('#btnPilihStyle').on('click', function(e){

                var style = $('#style').val();
                $('#' + style).remove();

                if(style == 'optRightPicture'){
                    $('#sectionForm').append(ratakanan);
                } else if(style == 'optLeftPicture'){
                    $('#sectionForm').append(ratakiri);
                } else if(style == 'optTextOnly'){
                    $('#sectionForm').append(textonly);
                } else if(style == 'optPictureOnly'){
                    $('#sectionForm').append(pictures);
                }
            });
        });
    </script>
@endpush
