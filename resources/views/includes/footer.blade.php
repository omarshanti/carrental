
<footer>
  <div class="footer-top">
    <div class="container">
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <div class="row">

        <div class="col-md-6" style="float: right;direction: rtl">
          <h6>{{__('ABOUT US')}}</h6>
          <ul style="direction: rtl">


          <li><a href="{{route('AboutUs')}}">{{__('About Us')}}</a></li>
            <li><a href="{{route('faqs')}}">{{__('FAQs')}}</a></li>
            <li><a href="{{route('ContactUS')}}">{{__('Contact Us')}}</a></li>
            <li><a href="{{route('privacy')}}">{{__('Privacy')}}</a></li>
            <li><a href="{{route('terms')}}">{{__('Terms of use')}}</a></li>
               <li><a href="{{route('admin.login')}}">{{__('Admin Login')}}</a></li>
          </ul>
        </div>
        @if(LaravelLocalization::getCurrentLocale() == 'ar') 
        <div class="col-md-3 col-sm-6" style="float: left">
          <h6 style="direction: rtl;">{{__('Subscribe Newsletter')}}</h6>
          <div class="newsletter-form">
            <form method="post" action="{{route('subscribe')}}">
              @csrf
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="{{__('Enter Email Address')}}" />
              </div>
              <button type="submit"  class="btn btn-block"> <span class="angle_arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></span> {{__('Subscribe')}}</button>
            </form>
            <p class="subscribed-text">{{__('*We send great deals and latest auto news to our subscribed users very week.')}}</p>
          </div>
        </div>
        @else
        <div class="col-md-3 col-sm-6">
          <h6>{{__('Subscribe Newsletter')}}</h6>
          <div class="newsletter-form">
            <form method="post" action="{{route('subscribe')}}">
              @csrf
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="{{__('Enter Email Address')}}" />
              </div>
              <button type="submit"  class="btn btn-block">{{__('Subscribe')}} <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">{{__('*We send great deals and latest auto news to our subscribed users very week.')}}</p>
          </div>
        </div>
        @endif
      </div>
      @else
      <div class="row">

        <div class="col-md-6">
          <h6>{{__('ABOUT US')}}</h6>
          <ul style="">


          <li><a href="{{route('AboutUs')}}">{{__('About Us')}}</a></li>
            <li><a href="{{route('faqs')}}">{{__('FAQs')}}</a></li>
            <li><a href="{{route('ContactUS')}}">{{__('Contact Us')}}</a></li>
            <li><a href="{{route('privacy')}}">{{__('Privacy')}}</a></li>
            <li><a href="{{route('terms')}}">{{__('Terms of use')}}</a></li>
               <li><a href="{{route('admin.login')}}">{{__('Admin Login')}}</a></li>
          </ul>
        </div>
        @if(LaravelLocalization::getCurrentLocale() == 'ar') 
        <div class="col-md-3 col-sm-6" style="float: left">
          <h6>{{__('Subscribe Newsletter')}}</h6>
          <div class="newsletter-form">
            <form method="post" action="{{route('subscribe')}}">
              @csrf
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="{{__('Enter Email Address')}}" />
              </div>
              <button type="submit"  class="btn btn-block">{{__('Subscribe')}} <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">{{__('*We send great deals and latest auto news to our subscribed users very week.')}}</p>
          </div>
        </div>
        @else
        <div class="col-md-3 col-sm-6" style="float: right">
          <h6>{{__('Subscribe Newsletter')}}</h6>
          <div class="newsletter-form">
            <form method="post" action="{{route('subscribe')}}">
              @csrf
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="{{__('Enter Email Address')}}" />
              </div>
              <button type="submit"  class="btn btn-block">{{__('Subscribe')}} <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">{{__('*We send great deals and latest auto news to our subscribed users very week.')}}</p>
          </div>
        </div>
        @endif
      </div>
      @endif
      
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container" >
      <div class="row">
        @if(LaravelLocalization::getCurrentLocale() == 'ar') 
        <div class="col-md-6 col-md-push-6 text-right" style="right: 80%;">
          <div class="footer_widget">
            <ul>
              <li><a href="https://code-projects.org/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="https://code-projects.org/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="https://code-projects.org/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="https://code-projects.org/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="https://code-projects.org/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
            <p>:{{__('Connect with Us')}}</p>
          </div>
        </div>
        @else
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>{{__('Connect with Us')}}:</p>
            <ul>
              <li><a href="https://code-projects.org/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="https://code-projects.org/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="https://code-projects.org/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="https://code-projects.org/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="https://code-projects.org/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        @endif
        @if(LaravelLocalization::getCurrentLocale() == 'ar') 
        <div class="col-md-6 col-md-pull-6" style="margin-right: 290px;">
           <p class="copy-right">{{__('Copyright')}} &copy; {{__('2022 Car Rental Portal. Brought To You By')}} 
        </div>
        @else
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right"> {{__('Copyright')}} &copy; {{__('2022 Car Rental Portal. Brought To You By')}} <a href="https://www.facebook.com/omar.shanti.9/"> OM@R</a></p>
        </div>
        @endif
      </div>
    </div>
  </div>
</footer>
