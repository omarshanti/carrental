@extends('layouts.app')

@section('content')
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>{{__('Update Password')}}</h1>
      </div>
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <ul class="coustom-breadcrumb" style="direction: rtl">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('Update Password')}}</li>
      </ul>
      @else
      <ul class="coustom-breadcrumb">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('Update Password')}}</li>
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
      <form  method="post" action="{{route('passsword.update')}}">
            {{ csrf_field() }}
            <div class="gray-bg field-title">
              <h6>{{__('Update Password')}}</h6>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Current Password')}}</label>
              <input class="form-control white_bg" id="password" name="oldpassword"  type="password" required>
            </div>
            <div cl
            <div class="form-group">
              <label class="control-label">{{__('New Password')}}</label>
              <input class="form-control white_bg" id="newpassword" type="password" name="password" required>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Confirm Password')}}</label>
              <input class="form-control white_bg" id="confirmpassword" type="confirmpassword" name="confirmpassword"  required>
            </div>
          
            <div class="form-group">
               <input type="submit" value="{{__('Update')}}"  id="submit" class="btn btn-block">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 
@endsection