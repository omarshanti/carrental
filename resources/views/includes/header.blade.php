
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="{{route('index')}}"><img src="{{asset('assets/images/logg.png')}}" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">{{__('FOR SUPPORT MAIL US')}} : </p>
              <a href="mailto:info@example.com">codeprojectsorg@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">{{__('SERVICE HELPLINE CALL US')}}: </p>
              <a href="tel:61-1234-5678-09">+91-9876543210</a> </div>
            @if(LaravelLocalization::getCurrentLocale() == 'en')
            <div class="social-follow">
              <ul>
                <li><a href="https://code-projects.org/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            @endif
            @auth
            <div class="login_btn"> <a href="{{route('logout')}}" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">{{__('Sign Out')}}</a> </div>
            @if(Auth::user()->auth == "'ADM'")
            <div class="login_btn"> <a href="{{route('admin.login')}}" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">{{__('Admin')}}</a> </div> 
            @endif  
            @else  
            <div class="login_btn"> <a href="{{route('login')}}" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">{{__('Login / Register')}}</a> </div> 
            @endauth
            @if(LaravelLocalization::getCurrentLocale() == 'ar')
            <div class="social-follow">
              <ul>
                <li><a href="https://code-projects.org/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="direction: rtl" @endif>
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        @if (Auth::check())
        @if(Auth::user()->auth !==("'ADM'"))
        <div class="user_login">
          @auth
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>


               {{ Auth::user()->name }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
    
            <li><a href="{{route('profile')}}">{{__('Profile Settings')}}</a></li>
              <li><a href="{{route('password')}}">{{__('Update Password')}}</a></li>
            <li><a href="{{route('my-booking')}}">{{__('My Booking')}}</a></li>
            <li><a href="{{route('testimonial')}}">{{__('Post a Testimonial')}}</a></li>
          <li><a href="{{route('my-testimonial')}}">{{__('My Testimonial')}}</a></li>
            <li><a href="{{route('logout')}}">{{__('Sign Out')}}</a></li>
          </ul>
            </li>
          </ul>
          @endauth
        </div>
        @endif
        @endif
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="{{route('home_search')}}" method="post" id="header-search-form">
            @csrf
            <input type="text" placeholder="{{__('Search...')}}" class="form-control" name="search">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="{{route('index')}}">{{__('HOME')}}</a>    </li>

          <li><a href="{{route('AboutUs')}}">{{__('ABOUT US')}}</a></li>
          <li><a href="{{route('carlisting')}}">{{__('CAR LISTING')}}</a>
          <li><a href="{{route('faqs')}}">{{__('FAQs')}}</a></li>
          <li><a href="{{route('ContactUS')}}">{{__('CONTACT US')}}</a></li>
          <ul class="nav navbar-nav">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
          </ul>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>
