@extends('layouts.argon')
@section('title','All Mails')
@section('content')
<div class="header pb-8">
    <div class="container-fluid">
        <div class="header-body">
        </div>
    </div>
  </div> 
<div class="container-fluid " style="margin-top:-30px">
  
    <div class="row"> 
        <div class="col-md-4 abu-abu" > 
            <br><p class="p2">Emails  <button id="refresher" class="btn btn-sm"><i class="fas fa-sync"></i></button></p>
            <div class="row" id="myList" role="tablist"> 
              <div class="col-md-6">  
                <a  class="nav-link"  href="{{ route('mail') }}" ><p class="pa active" style="border-bottom:2px solid #FDB813;font-weight: bold;"><strong> Careers ({{ $countC }}) </strong></p></a>                  
                </div>
                <div class="col-md-6">  
                <a class="nav-link text-white" id="list-profile-list" href="{{ route('mail-partner') }}" ><p><strong>Partnership ({{ $countP }}) </strong></p></a>
                </div>
            </div>
          <!-- INI CAREER -->

<!-- Tab panes -->
<div class="tab-content" id="nav-tabContent">
    
  <div class="tab-pane  fade show active"  id="list-home">
      @foreach ($contacts as $contact)
      <div class="row"> 
        <div class="col-md-12 pa btn" id=""style="padding:0;"> 
        <a class="read-email read-count" data-id="{{$contact->id}}" data-read="{{$contact->read_count}}" style="cursor:pointer" data-name="{{ $contact->name }}" data-topic="{{ $contact->topic }}" data-date="{{\Carbon\Carbon::parse($contact->created_at)->formatLocalized('%D')}}" data-email="{{ $contact->email }}" data-msg="{{ $contact->messages }}"> 
          <div class="row"> 
              <div class="col-md-8" style="margin-left:0px;width:240px;">  
                <ul class="touch" id="touch">
                    @if ($contact->read_count == 0)
                    <p class="pa text-yellow text-left nameCount"style="margin-left:-20px" >{{ ucfirst($contact->name) }}</p>
                    <p class="pe text-yellow topicCount"  style=" margin-left:-88px">{{ ucfirst($contact->topic) }}</p>
                    @else
                    <p class="pa text-left" style="margin-left:-20px;">{{ ucfirst($contact->name) }}</p>
                    <p class="pe" style="color: #9B9B9B;margin-left:-88px">{{ ucfirst($contact->topic) }}</p>
                    @endif
              </ul>
            </div>
            <div class="col-md-4" align="right">  
            <a href="{{ route('delete-contact',$contact->id) }}" class="delete-contact"><button type="button"  rel="tooltip" title="Remove" class="btn btn-link btn-md">
                  <i class="text-yellow fas fa-trash-alt "></i>
                </button></a>
              <p class="pa" id="date"> {{\Carbon\Carbon::parse($contact->created_at)->formatLocalized('%D')}}</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
      &nbsp;
      &nbsp;
      &nbsp;

    </div>
    
  </div>
  
  
  
</div>
<!-- CONTENT -->
{{-- @foreach ($latestMessages as $latest)
@if ($latest->topic == 'career')   --}}
<div class="col-md-8">  
  <div class="row">
      <div  class="col-md-8">
        <br><h2 class="bold" id="read-topic"></h2><br>  
          <h3 id="read-name"></h3>
          <p class="pe" style="color: #9B9B9B" id="read-email-topic"></p>  
      </div>
      <div class="col-md-4" align="right">  
        <br><h4 id="read-date"></h4>
      </div>
  </div>
  <div class="row"> 
    <!-- ISI PESAN -->
    <div class="col-md-12"> 
      <div class="pas" style="font-weight: 500">
        <p  id="read-message"></p>
      </div>
    </div>
  </div>
</div>
<div><br>
  {{ $contacts->render() }}
</div>
{{-- @endif
@endforeach --}}
    </div>
    
    


    @include('layouts.footers.auth')
  </div>
  @endsection
  
<style> 
    .pas{
      color: black;
font-family: Avenir;
font-size: 16px;
line-height: 24px;


  }
.bold{
  font-weight: 800;
}
  .list{
    border-left-style: solid;
    border-left-width: 2px;
    border-left-color: #FDB813;
    color: #FDB813;
  }
.pe{
      color: #FFFFFF;
font-family: Avenir;
font-size: 14.5px;
  }
  .pa{
      color: #FFFFFF;
font-family: Avenir;
font-size: 16px;
line-height: 24px;
  }
  .hi{
    color: #FDB813;
  }
  .actived{
border-color: #FDB813;
border-bottom-width: 1.4px;
border-bottom-style: solid;
padding-right: 20%

  }
  .p2{
      color: #FFFFFF;
  font-family: Avenir;
  font-size: 24px;
  font-weight: 500;
  line-height: 29px;
  }
  .abu-abu{
    background-color: #282828;
    height: 750px;    
  }
</style>
  @push('js')
  <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
      $('#refresher').click(function(){
        location.reload();
      });

      $(document).ready(function(){        
        if($('.read-mail').data('read').val >= 1){
              $('.nameCount').removeClass('text-yellow');
              $('.topicCount').removeClass('text-yellow');
            }          
      });

      $('.delete-contact').click(function(e){
                e.preventDefault();
                var link_team = $(this).attr('href');
                swal({
                    title:'Are you sure ?',
                    type:'warning',
                    showCancelButton:true,
                    cancelButtonColor:'#d33',
                    confirmButtonColor:'#3085d6'
                }).then((result)=>{
                    if(result.value){
                        window.location.href = link_team;
                        console.log('delete click');
                    }
                });
            });

      $('body').on('click', '.read-email', function(){
        var topic = $(this).data('topic');
        var name = $(this).data('name');
        var email = $(this).data('email');
        var msg = $(this).data('msg');
        var date = $(this).data('date');
        var up = name.charAt(0).toUpperCase() + name.substr(1);
        
        $('.touch').each(function () {
          $(this).removeClass('list');
        });

        $(this).find('#touch').addClass('list');
        $('#read-topic').text('Question for ' + topic);
        $('#read-name').text(up);
        $('#read-email-topic').text( email +' | '+topic);
        $('#read-message').text(msg);
        $('#read-date').text(date);
      });

      $('.read-count').click(function(){                 
            $.ajax({
                type: "post",
                url: "{{ route('update.read.email') }}",
                data: {
                    '_token' : "{{ csrf_token() }}",
                    'id' : $(this).data('id'),
                    'visit_count' : $(this).data('read'),
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
@endpush
