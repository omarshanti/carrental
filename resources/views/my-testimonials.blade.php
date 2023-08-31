@extends('layouts.app')


@section('content')
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>{{__('My Testimonials')}}</h1>
      </div>
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <ul class="coustom-breadcrumb" style="direction: rtl">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('My Testimonials')}}</li>
      </ul>
      @else
      <ul class="coustom-breadcrumb">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('My Testimonials')}}</li>
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
      <div class="col-md-8 col-sm-8">



        <div class="profile_wrap"  @if(LaravelLocalization::getCurrentLocale() == 'ar') style="direction: rtl" @endif>
          <h5 class="uppercase underline">{{__('My Testimonials')}} </h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">

              @foreach($test as $tests)
              <li>
           
                <div>
                  @if(LaravelLocalization::getCurrentLocale() == 'ar')
                  <p>{{$tests->test_ar}} </p>
                  @else
                  <p>{{$tests->Testimonial}} </p>
                  @endif
                
                   <p><b>{{__('Posting Date:')}}</b>{{$tests->PostingDate}} </p>
                </div>
                @if($tests->status==1)
                 <div class="vehicle_status"> <a class="btn outline btn-xs active-btn">{{__('Active')}}</a>
                
                  <div class="clearfix"></div>
                  </div>
                  @else
               <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">{{__('Waiting for approval')}}</a>
                  <div class="clearfix"></div>
                  </div>
                  @endif
              </li>
              @endforeach
              
            </ul>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 

@endsection