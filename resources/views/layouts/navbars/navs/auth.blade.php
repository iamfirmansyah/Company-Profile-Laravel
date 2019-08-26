<!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <!-- Brand -->
        
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex mr-lg-auto w-100">
            <div class="form-group mb-0 w-100">
                <div class="input-group input-group-alternative w-75">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search text-dark"></i></span>
                    </div>
                    <input class="form-control text-dark" placeholder="Search" type="text">
                </div>
            </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <div class="media-body mr-3 d-none d-lg-block">
                            <span class="mb-0 text-sm text-dark font-weight-bold">{{ ucfirst(auth()->user()->name) }}</span>
                        </div>
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="" style="border-radius:50%" width="50px" height="40px" src="{{ asset('public/upload/images/adminProfile/'. Auth::user()->image ) }}">
                        {{-- <h1 class="text-white">{{ ucfirst(substr(auth()->user()->name ,0,1)) }}</h1> --}}
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    
                    <a href="{{ route('setting',auth()->user()->name) }}" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>