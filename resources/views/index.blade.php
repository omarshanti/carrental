@extends('layouts.app')

@section('content')
  <!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>{{__('Find the right car for you.')}}</h1>
            <p>{{__('We have more than a thousand cars for you to choose.')}} </p>
            <a href="{{route('carlisting')}}" class="btn">@if(LaravelLocalization::getCurrentLocale() == 'ar') <span class="angle_arrow"> <i class="fa fa-angle-left" aria-hidden="true"></i></span> {{__('Read More')}}  @else {{__('Read More')}} <span class="angle_arrow"> <i class="fa fa-angle-right" aria-hidden="true"></i></span> @endif</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>{{__('Find the Best')}} <span>{{__('CarForYou')}}</span></h2>
      <p>{{__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.")}}</p>
    </div>
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">{{__('New Car')}}</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
    
      
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">
@if(LaravelLocalization::getCurrentLocale() == 'ar') 
@foreach($brand  as $value) 

<div class="col-list-3">

<div class="recent-car-list">

<div class="car-info-box"> <a href="{{route('v-details',['id'=>$value->id])}}" class="img-responsive" alt="image"><img src="{{asset('assets/images/'.$value->Vimage1)}}"  class="img-responsive" alt="image"></a>
<ul style="direction: rtl">
<li><i class="fa fa-car" aria-hidden="true">  {{__($value->FuelType)}}</i></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>    {{$value->ModelYear}} {{__('Model')}}</li>
<li><i class="fa fa-user" aria-hidden="true"></i>    {{$value->SeatingCapacity}} {{__('seats')}}</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="{{route('v-details',['id'=>$value->id])}}">{{$value->VehiclesTitle_ar}} , {{$value->brands->brand_ar}} </a></h6>
<span class="price">${{$value->PricePerDay}}/{{__('Day')}}</span> 
</div>
<div class="inventory_info_m">
<p style="float: right;">... {{substr($value->VehiclesOverview_ar,0,70)}}</p>
<a href="{{route('v-details',['id'=>$value->id])}}"  style="margin-left: 97px;"  class="btn"><span class="angle_arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></span> {{__('View Details')}}</a>
</div>

</div>
</div>
@endforeach
@else
@foreach($brand  as $value) 

<div class="col-list-3">

<div class="recent-car-list">

<div class="car-info-box"> <a href="{{route('v-details',['id'=>$value->id])}}" class="img-responsive" alt="image"><img src="{{asset('assets/images/'.$value->Vimage1)}}"  class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"> {{$value->FuelType}}</i></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>{{$value->ModelYear}} Model</li>
<li><i class="fa fa-user" aria-hidden="true"></i>{{$value->SeatingCapacity}} seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="{{route('v-details',['id'=>$value->id])}}">{{$value->brands->BrandName}} , {{$value->VehiclesTitle}} </a></h6>
<span class="price">${{$value->PricePerDay}}/Day</span> 
</div>
<div class="inventory_info_m">
<p>{{substr($value->VehiclesOverview,0,70)}} ...</p>
<a href="{{route('v-details',['id'=>$value->id])}}" class="btn"> {{__('View Details')}} <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
</div>

</div>
</div>
@endforeach

@endif
      </div>
    </div>
  </div>

</section>

<!-- /Resent Cat --> 

<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
            <p>{{__('Years In Business')}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
            <p>{{__('New Cars For Sale')}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
            <p>{{__('Used Cars For Sale')}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
            <p>{{__('Satisfied Customers')}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>{{__('Our Satisfied')}} <span>{{__('Customers')}}</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">

        @if(LaravelLocalization::getCurrentLocale() == 'ar') 
        @foreach($data as $value)
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="{{asset('assets/images/cat-profile.png')}}" alt="" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>{{$value->user->name}}</h5>
            <p>{{$value->test_ar}}</p>
          </div>
        </div>
        </div>
     @endforeach
        @else
        @foreach($data as $value)
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="{{asset('assets/images/cat-profile.png')}}" alt="" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5>{{$value->user->name}}</h5>
            <p>{{$value->Testimonial}}</p>
          </div>
        </div>
        </div>
     @endforeach
        @endif

      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 
@endsection