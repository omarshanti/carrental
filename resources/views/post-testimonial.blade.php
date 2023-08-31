@extends('layouts.app')
@section('style')

.errorWrap {
  padding: 10px;
  margin: 0 0 20px 0;
  background: #fff;
  border-left: 4px solid #dd3d36;
  -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
  padding: 10px;
  margin: 0 0 20px 0;
  background: #fff;
  border-left: 4px solid #5cb85c;
  -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
@endsection

@section('content')
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>{{__('Post Testimonial')}}</h1>
      </div>
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <ul class="coustom-breadcrumb" style="direction: rtl">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('Post Testimonial')}}</li>
      </ul>
      @else
      <ul class="coustom-breadcrumb">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('Post Testimonial')}}</li>
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
          <h5 class="uppercase underline">{{__('Post a Testimonial')}}</h5>
          @if ($errors->any())
          <div class="alert alert-danger">
          <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
          </ul>
           </div>
           @endif
          <form  method="post" action="{{route('post.testimonial')}}">
          @csrf
            <div class="form-group">
              <label class="control-label">{{__('Testimonail In English')}}</label>
              <textarea class="form-control white_bg" name="testimonial" rows="4" required=""></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">{{__('Testimonail In Arabic')}}</label>
              <textarea class="form-control white_bg" name="testimonial_ar" rows="4" required=""></textarea>
            </div>
            <div class="form-group">
              <button type="submit"  class="btn">{{__('Save')}}  <span class="angle_arrow">@if(LaravelLocalization::getCurrentLocale() == 'ar') <i class="fa fa-angle-left" aria-hidden="true"></i> @else <i class="fa fa-angle-right" aria-hidden="true"></i> @endif</span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 
@endsection