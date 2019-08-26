@extends('layouts.argon')
@section('title','Dashboard | Edit Job')
@section('content')
<div class="header pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
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
                @if (session('pesan'))
                    <div class="pesan" data-pesan="{{ session('pesan') }}"></div>
                @endif
                <!-- form stats -->
                {!! Breadcrumbs::render('editjob',$getJob) !!}
            <form action="{{ route('update-job',$getJob->id) }}" method="POST">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xl-2 col-lg-6">
                                <label for="" class="text-muted ml-1">Job Division</label>
                            <select name="division" class="form-control rounded-pill border form-inline d-md-flex" style="border-radius:50px;" id="">
                                @if ($getJob->division == 'Business')
                                <option value="Business">Business</option>
                                <option value="Creative">Creative</option>
                                <option value="Programmer">Programmer</option>
                                @elseif($getJob->division == 'Creative') 
                                <option value="Creative">Creative</option>
                                <option value="Business">Business</option>
                                <option value="Programmer">Programmer</option>
                                @else
                                <option value="Programmer">Programmer</option>
                                <option value="Business">Business</option>
                                <option value="Creative">Creative</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-6">
                            <label for="" class="text-muted">Job Location</label>
                            <select name="location" class="form-control border" style="border-radius:50px;" id="">
                                <option value="Jakarta">Jakarta</option>
                                <option value="Yogyakarta">Yogyakarta</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="" class="text-muted">Job Title</label>
                    <input type="text" name="job_title" required value="{{ $getJob->job_title }}" class="border form-control w-75">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-muted">Description</label>
                    <textarea name="description" id="ckeditor" required cols="30" rows="10" class="form-control border ckeditor">{{ $getJob->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="text-muted">Requirement</label>
                    <textarea name="requirement" id="ckeditor" cols="30" rows="10" class="form-control border ckeditor">{{ $getJob->requirement }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <input type="submit" class="btn btn-warning" value="Update">
                            <a href="{{ url('/admin/jobs') }}"class="btn btn-danger">CANCEL</a>
                        </div>
                    </div>
                </form>
                @include('layouts.footers.auth')
            </div>
        </div>
    </div>
        
        {{-- <h1>Create</h1> --}}
@endsection
@push('js')
    
@endpush