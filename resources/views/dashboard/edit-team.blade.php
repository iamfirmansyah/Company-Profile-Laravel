@extends('layouts.argon')
@section('title','Dashboard | Edit Team')
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
       {!! Breadcrumbs::render('editteam',$getTeam) !!}
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
<form action="{{ route('update-member',$getTeam->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-12" style="padding-left:3%; "><br>
            <div class="row">
                    <div class="col-md-10">
                        <label for="" class="text-muted">Full Name</label>  <br>
                        <div class="form-group">
                        <input type="text" required value="{{ $getTeam->full_name }}" name="full_name" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-10">
                    <label for="" class="text-muted">Job Name</label>  <br>
                    <div class="form-group">
                        <input type="text" required value="{{ $getTeam->job_name }}" name="job_name" class="form-control" placeholder="Job Name">
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-3">
                        <label for="" class="text-muted">Division</label>  
                        <div class="form-group">
                            <select class="form-control" name="division" style="border-radius: 1.375rem;" id="exampleFormControlSelect1">
                                <option disabled>Division</option>
                                @if ($getTeam->division == 'Creative')
                                <option value="Creative">Creative</option>
                                <option value="Business">Business</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Leader">Leader</option>
                                @elseif($getTeam->division == 'Business')
                                <option value="Business">Business</option>
                                <option value="Creative">Creative</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Leader">Leader</option>
                                @elseif($getTeam->division == 'Programmer')
                                <option value="Programmer">Programmer</option>
                                <option value="Business">Business</option>
                                <option value="Creative">Creative</option>
                                <option value="Leader">Leader</option>
                                @else
                                <option value="Leader">Leader</option>
                                <option value="Programmer">Programmer</option>                                   
                                <option value="Creative">Creative</option>
                                <option value="Business">Business</option>

                                @endif
                            </select>
                         </div>     
                     </div>
                     <div class="col-md-3">
                            <label for="" class="text-muted">Position Card</label>  
                            <div class="form-group">
                                <select class="form-control" name="position" style="border-radius: 1.375rem;" id="exampleFormControlSelect1">
                                    <option disabled>Position Card</option>
                                    @if ($getTeam->position == 'normal')
                                        <option value="normal">Normal</option>
                                        <option value="master">Top 3</option>
                                    @else
                                        <option value="master">Top 3</option>
                                        <option value="normal">Normal</option>
                                    @endif 
                                </select>
                             </div>     
                         </div>
                     <div class="col-md-3" style="padding-left:3%; ">
                            <label for="" class="text-muted">Location</label>  
                            <div class="form-group">
                                <select class="form-control" name="location" style="border-radius: 1.375rem;" id="exampleFormControlSelect1">
                                        <option disabled>Location</option>
                                        @if ($getTeam->location == 'Jakarta')
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        @else
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Jakarta">Jakarta</option>
                                        @endif                        
                                </select>
                             </div>     
                        </div> 
                </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="" class="text-muted" style="font-size:14px">Upload Team Image </label>
                    <label for="" class="text-muted" style="font-size:14px">Max File size 50MB (JPEG/PNG)</label><br>
                <input type="file" name="foto" id="input-foto" class="form-control">
                <input type="hidden" name="fotoLama" value="{{ $getTeam->foto }}">
                <img src="" class="d-none" id="preview-foto" alt="foto" width="300px">
            </div>
        </div>
        <div class="row">
                <div class="col-md-10">
                    <label for="" class="text-muted">Phone Number</label>  <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">+62</div>
                        </div>
                    <input type="number" id="phone" value="{{ substr($getTeam->phone,3) }}" name="phone"  class="form-control" placeholder="Phone">
                    </div>
                </div>
            </div>            
            <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                        <label for="" class="text-muted">Email</label>  <br>
                            <input type="email" name="email" value="{{ $getTeam->email }}" class="form-control" placeholder="Email">
                        </div>
                    </div>
            </div>
            <label for="" class="text-muted">Social Media & Profile</label>
            <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="text-muted">Linkedin</label>  <br>
                                <input type="text" name="linkedin" value="{{ $getTeam->linkedin }}" class="form-control" placeholder="www.linkedin.com/in/your-linkedin-account">
                            </div>
                     </div>
                     <div class="col-md-4" style="padding-left:3%; ">
                            <div class="form-group">
                                <label for="" class="text-muted">Instagram</label>  <br>
                                <input type="text" name="instagram" value="{{ $getTeam->instagram }}" class="form-control" placeholder="www.instagram.com/your-instagram-account">
                            </div>    
                        </div> 
                        <div class="col-md-4" style="padding-left:3%; ">
                                <div class="form-group">
                                    <label for="" class="text-muted">Twitter</label>  <br>
                                    <input type="text" name="twitter" value="{{ $getTeam->twitter }}" class="form-control" placeholder="www.twitter.com/your-twitter-account">
                                </div>  
                        </div> 
                </div>
                <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="text-muted">Dribbble</label>  <br>
                                    <input type="text" name="dribbble" value="{{ $getTeam->dribbble }}" class="form-control" placeholder="www.dribbble.com/your-dribbble-account">
                                </div>
                         </div>
                         <div class="col-md-4" style="padding-left:3%; ">
                                <div class="form-group">
                                    <label for="" class="text-muted">Behance</label>  <br>
                                    <input type="text" name="behance" value="{{ $getTeam->behance }}" class="form-control" placeholder="www.behance.net/your-behance-account">
                                </div>    
                            </div> 
                            <div class="col-md-4" style="padding-left:3%; ">
                                    <div class="form-group">
                                        <label for="" class="text-muted">Github</label>  <br>
                                        <input type="text" name="github" value="{{ $getTeam->github }}" class="form-control" placeholder="www.github.com/your-github-account">
                                    </div>  
                            </div> 
                    </div>
        <div class="row">
            <div class="col-md-12">
            <label for="">Description</label>
            <textarea name="description" id="ckeditor" class="ckeditor" cols="30" rows="10">{{ $getTeam->description }}</textarea>
            </div>
        </div>
        <br>
        <div class="row">
                <div class="col-md-6 mx-auto">
                    <input type="submit" class="btn btn-warning" value="UPDATE ">
                    <a href="{{ url('/admin/teams') }}"class="btn btn-danger">CANCEL</a>
                </div>
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
@endpush