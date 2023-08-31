@extends('layouts.app')

@section('content')
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>{{__('My Booking')}}</h1>
      </div>
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <ul class="coustom-breadcrumb" style="direction: rtl">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('My Booking')}}</li>
      </ul>
      @else
      <ul class="coustom-breadcrumb">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('My Booking')}}</li>
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
        <div class="profile_wrap">
          <h5 class="uppercase underline" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="direction: rtl" @endif>{{__('My Bookings')}} </h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">

@foreach($book as $books)
<li>
                <div class="vehicle_img"> <a href="{{route('v-details',['id'=>$books->cars->id])}}" alt="image"><img src="{{asset('assets/images/'.$books->cars->Vimage1)}}" alt="image"></a> </div>
                <div class="vehicle_title" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="margin-right: -137px;"  @endif>
                  <h6 @if(LaravelLocalization::getCurrentLocale() == 'ar') style="margin-right: 110px;" @endif><a href="{{route('v-details',['id'=>$books->cars->id])}}">@if(LaravelLocalization::getCurrentLocale() == 'ar'){{$books->cars->brands->brand_ar}}  , {{$books->cars->VehiclesTitle_ar}} @else{{$books->cars->brands->BrandName}}  , {{$books->cars->VehiclesTitle}} @endif</a></h6>
                  <p><b>{{__('From Date:')}}</b> {{$books->FromDate}}<br/> <b>{{__('To Date:')}}</b> {{$books->ToDate}}</p>
                  @if($books->Status==1)
                  <div class="vehicle_status"> <a href="#"  class="btn outline btn-xs active-btn dddd" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="margin-left:-216px;" @endif>{{__('Confirmed')}}</a>
                             <div class="clearfix"></div>
                  </div>
                  @endif
                  @if($books->Status==2)
                 <div class="vehicle_status"> <a href="#" class="btn outline btn-xs " @if(LaravelLocalization::getCurrentLocale() == 'ar') style="margin-left:-216px;" @endif>{{__('Cancelled')}}</a>
                   <div class="clearfix"></div>
                 </div>
                  @endif
                  @if($books->Status==0)
                 <div class="vehicle_status"> <a href="#" class="btn outline btn-xs" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="margin-left:-216px;" @endif>{{__('Not Confirm yet')}}</a>
                   <div class="clearfix"></div>
                 </div>
                 @endif
                  @if(LaravelLocalization::getCurrentLocale() == 'ar')  
       <div style="float: left;"><p style="direction: rtl"><b>{{__('Message:')}}</b> {{$books->message}}</p></div>
       @else
       <div style="float: left"><p><b>{{__('Message:')}}</b> {{$books->message}}</p></div>
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