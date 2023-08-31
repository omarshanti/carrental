@extends('layouts.app')

@section('content')
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>{{__('Your Profile')}}</h1>
      </div>
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <ul class="coustom-breadcrumb" style="direction: rtl">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('Profile')}}</li>
      </ul>
      @else
      <ul class="coustom-breadcrumb">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('Profile')}}</li>
      </ul>
      @endif
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 



<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> <img src="{{asset('assets/images/dealer-logo.jpg')}}" alt="image">
      </div>

      <div class="dealer_info" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="direction: rtl" @endif>
        <h5>{{Auth::user()->name}}</h5>
        <p>{{Auth::user()->Address}}<br>
          {{Auth::user()->City}}&nbsp;{{Auth::user()->Country}}</p>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-3 col-sm-3">
         @include('includes.sidebar')
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap"  @if(LaravelLocalization::getCurrentLocale() == 'ar') style="direction: rtl" @endif>
          <h5 class="uppercase underline">{{__('Genral Settings')}}</h5>
          @if ($errors->any())
          <div class="alert alert-danger">
          <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
          </ul>
           </div>
           @endif
          <form  method="POST" action="{{route('profile.update', ['id' => Auth::user()->id])}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="form-group" >
              <label class="control-label" >{{__('Reg Date')}} -</label>
              {{Auth::user()->created_at}}
            </div>
             
            <div class="form-group">
              <label class="control-label">{{__('Last Update at')}}  -</label>
              {{Auth::user()->updated_at}}
            </div>
           
            <div class="form-group">
              <label class="control-label">{{__('Full Name')}}</label>
              <input class="form-control white_bg" name="name" value="{{Auth::user()->name}}" id="fullname" type="text"  required>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Email Address')}}</label>
              <input class="form-control white_bg" value="{{Auth::user()->email}}" name="email" id="email" type="email" required readonly>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Phone Number')}}</label>
              <input class="form-control white_bg" name="mobile" value="{{Auth::user()->mobile}}" id="phone-number" type="text" required>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Date of Birth')}}&nbsp;({{__('dd/mm/yyyy')}})</label>
              <input class="form-control white_bg" value="{{Auth::user()->dob}}" name="dob" placeholder="dd/mm/yyyy" id="birth-date" type="text" >
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Your Address')}}</label>
              <textarea class="form-control white_bg" name="address" rows="4" >{{Auth::user()->Address}}</textarea>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Country')}}</label>
              <input class="form-control white_bg"  id="country" name="country" value="{{Auth::user()->Country}}" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">{{__('City')}}</label>
              <input class="form-control white_bg" id="city" name="city" value="{{Auth::user()->City}}" type="text">
            </div>
           
           
            <div class="form-group">
              <button type="submit" name="updateprofile" class="btn">{{__('Save Changes')}} <span class="angle_arrow"> @if(LaravelLocalization::getCurrentLocale() == 'ar') <i class="fa fa-angle-left" aria-hidden="true"></i> @else <i class="fa fa-angle-right" aria-hidden="true"></i> @endif</span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 
@endsection