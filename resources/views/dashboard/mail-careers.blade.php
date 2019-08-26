@extends('layouts.argon')
@section('title','All Mails')
@section('content')
    @include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <div class="row"> 
        <div class="col-md-4 abu-abu" > 
            <br><p class="p2">Emails    <button type="button" class="btn btn-sm btn-primary" id="refresher"><i class="fas fa-sync-alt text-white " aria-hidden="true"></i></button></p>
            <div class="row" id="myList" role="tablist"> 
              <div class="col-md-6">  
                  <a  class="nav-link"  id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><p class="pa active" style="font-weight: bold;"><strong> Careers ({{ $countC }}) </strong></p></a>                  
              </div>
              <div class="col-md-6">  
                  <a class="nav-link text-white" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><p><strong>Partnership ({{ $countP }}) </strong></p></a>
              </div>
            </div>
          <!-- INI CAREER -->

<!-- Tab panes -->
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane  fade show active"  id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      @foreach ($contacts as $contact)
      {{-- @if ($contact->topic == 'career') --}}
      <div class="row"> 
        <div class="col-md-12 pa" id=""> 
          <a href="">
            <div class="row"> 
              <div class="col-md-8">  
                <ul class="list">
                  <li class=""><p class="pa">{{$contact->name}}</p></li>
                <p class="pe" style="color: #9B9B9B">{{ $contact->topic }}</p>
                </ul>
              </div>
              <div class="col-md-4" align="right">  
                <p class="pa"> {{\Carbon\Carbon::parse($contact->created_at)->formatLocalized('%D')}}</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      {{-- @endif --}}
      @endforeach
    </div>
    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      @foreach ($contacts as $item)
      {{-- @if ($item->topic == 'partnership') --}}
      <div class="row"> 
        <div class="col-md-12 pa"> 
          <a href="">
            <div class="row"> 
              <div class="col-md-8">  
                <ul class="list">  
                <li class=""><p class="pa">{{ $item->name }} </p></li>
                  <p class="pe" style="color: #9B9B9B">{{$item->topic}}</p>
                </ul>
              </div>
              <div class="col-md-4" align="right">  
                <p class="pa"> 14/5/2019</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      {{-- @endif --}}
      @endforeach
      
    </div>
    
  </div>
  
  
  
</div>
<!-- CONTENT -->
          <div class="col-md-8 ">  
            <div class="row">   
                <div  class="col-md-8"> 
                  <br><h2 class="bold">Question for Carrers</h2><br>  
                    <h3>Laquita Elliott</h3>
                    <p class="pe" style="color: #9B9B9B">laquita.elliott@gmail.com | UI/UX Designer Career</p>  
                </div>
                <div class="col-md-4" align="right">  
                    <br><h4>14/5/2019</h4>
                  </div>
            </div>
            <div class="row"> 
              <!-- ISI PESAN -->
              <div class="col-md-12"> 
                    <div class="pas" style="font-weight: 500">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim nisi vitae hendrerit volutpat. Vestibulum sollicitudin erat magna, eget tristique elit scelerisque in. Curabitur maximus metus ante, vitae porttitor tortor scelerisque sed. Nulla vitae molestie ipsum. Duis in tempus nisi </p>
                        <p> Nam dapibus cursus risus, egestas dignissim odio scelerisque ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi sed vulputate lorem, consequat feugiat mauris. Nam et efficitur neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam ornare aliquet gravida.</p>
                      </div>
                    </div>
                  </div>
                </div>
    </div>
    
    
    @include('layouts.footers.auth')
  </div>
  @endsection
  
  @push('js')
  <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
      $('#refresher').click(function(){
        location.reload();
      });
    </script>
@endpush

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
      height: 45rem;
    }
</style>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>