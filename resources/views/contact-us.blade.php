@extends('layouts.app')


@section('content')


<!--Page Header-->

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>{{__('Contact Us')}}</h1>
      </div>
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <ul class="coustom-breadcrumb" style="direction: rtl">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('Contact Us')}}</li>
      </ul>
      @else
      <ul class="coustom-breadcrumb">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('Contact Us')}}</li>
      </ul>
      @endif
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!-- /Page Header--> 



<!--Contact-us-->

<section class="contact_us section-padding">

  <div class="container">

    <div  class="row">

      <div class="col-md-6" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="direction: rtl" @endif>
        <h3>{{__('Get in touch using the form below')}}</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
        </ul>
         </div>
         @endif
        <div class="contact_form gray-bg" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="width: 555px" @endif>

          <form  method="post" action="{{route('post.contact')}}">
            @csrf
            <div class="form-group">
              <label class="control-label">{{__('Full Name')}} <span>*</span></label>
              <input type="text" name="name" class="form-control white_bg"  required>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Email Address')}} <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg"  required>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Phone Number')}} <span>*</span></label>
              <input type="text" name="contactno" class="form-control white_bg"  required>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Message.')}} <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit"  type="submit">{{__('Send Message')}} <span class="angle_arrow">  @if(LaravelLocalization::getCurrentLocale() == 'ar') <i class="fa fa-angle-left" aria-hidden="true"></i> @else <i class="fa fa-angle-right" aria-hidden="true"></i> @endif </span></button>
            </div>
          </form>

        </div>

      </div>
        
      <div class="col-md-6 contact" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="left: 160px;" @endif>
        <h3 >{{__('Contact Info')}}</h3>

        <div class="contact_detail" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="direction: rtl" @endif>
          <ul >
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m">{{$about->address}}</div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="tel:61-1234-567-90">{{$about->email}}</a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:contact@exampleurl.com">{{$about->phone}}</a></div>
            </li>
          </ul>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- /Contact-us--> 


@endsection