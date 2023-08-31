@extends('layouts.app')

@section('content')
<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>{{__('CAR LISTING')}}</h1>
      </div>
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <ul class="coustom-breadcrumb" style="direction: rtl">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('CAR LISTING')}}</li>
      </ul>
      @else
      <ul class="coustom-breadcrumb">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{__('CAR LISTING')}}</li>
      </ul>
      @endif
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          
{{--  Query for Listing count  --}}
@if(LaravelLocalization::getCurrentLocale() == 'ar')
<div class="sorting-count" style="float: left;">
<p style="direction: rtl;"><span >{{$count}} {{__('Listings')}}</span></p>
@else
<div class="sorting-count">
<p><span >{{$count}} {{__('Listings')}}</span></p>
@endif
</div>
</div>
@if(LaravelLocalization::getCurrentLocale() == 'ar')
   @foreach ($car as $item)
  <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img src="{{asset('assets/images/'.$item->Vimage1)}}" class="img-responsive" alt="Image" /> </a> </div>
          
          <div class="product-listing-content" style="direction: rtl">
            <h5><a href="{{route('v-details',['id'=>$item->id])}}">{{$item->VehiclesTitle_ar}} , {{$item->brands->brand_ar}}</a></h5>
            <p class="list-price" >{{__('Per Day')}} ${{$item->PricePerDay}}</p>
            <ul style="direction: rtl">
              <li><i class="fa fa-user" aria-hidden="true"></i>{{$item->SeatingCapacity}} {{__('seats')}}</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$item->ModelYear}} {{__('Model')}}</li>
              <li><i class="fa fa-car" aria-hidden="true"></i>{{__($item->FuelType)}}</li>
            </ul>
            <a href="{{route('v-details',['id'=>$item->id])}}" class="btn"> {{__('View Details')}} <span class="angle_arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></span></a>
          </div>
     </div>   
    @endforeach
    @else
     @foreach ($car as $item)
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img src="{{asset('assets/images/'.$item->Vimage1)}}" class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content" style="direction: ltr">
            <h5><a href="{{route('v-details',['id'=>$item->id])}}"> {{$item->brands->BrandName}} , {{$item->VehiclesTitle}}</a></h5>
            <p class="list-price">${{$item->PricePerDay}} Per Day</p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i> {{$item->SeatingCapacity}} seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$item->ModelYear}} Model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i> {{$item->FuelType}}</li>
            </ul>
            <a href="{{route('v-details',['id'=>$item->id])}}" class="btn"> {{__('View Details')}} <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>   
       @endforeach
        @endif
        {{$car->links()}}
         </div>
<br><br><br>
            
@if(LaravelLocalization::getCurrentLocale() == 'ar')
<!--Side-Bar-->
<aside class="col-md-3 col-md-pull-9">
  <div class="sidebar_widget">
    <div class="widget_heading" style="direction: rtl">
      <h5><i class="fa fa-filter" aria-hidden="true"></i>{{__('Find Your  Car')}}</h5>
    </div>  
<div class="sidebar_filter">
<form action="{{route('carlisting_search')}}" method="post">
    @csrf
<div class="form-group select">
   <select class="form-control" name="brand" style="direction: rtl">
        <option value="Select Brand">{{__('Select Brand')}}</option>
        @foreach ($brand as $item)
        <option value="{{$item->id}}">{{$item->brand_ar}}</option>
        @endforeach
   </select>
 </div>
<div class="form-group select">
  <select class="form-control" name="fueltype">
    <option value="Select Fuel Type" style="direction: rtl">{{__('Select Fuel Type')}}</option>
    <option value="Petrol" style="direction: rtl">{{__('PETROL')}}</option>
    <option value="Diesel" style="direction: rtl">{{__('DIESEL')}}</option>
    <option value="CNG" style="direction: rtl">{{__('CNG')}}</option>
  </select>
</div>
<div class="form-group">
  <button type="submit" class="btn btn-block">{{__('Search Car')}} <i class="fa fa-search" aria-hidden="true" ></i> </button>
    </div>
   </form>
     </div>
@else
<!--Side-Bar-->
<aside class="col-md-3 col-md-pull-9">
  <div class="sidebar_widget">
    <div class="widget_heading">
      <h5><i class="fa fa-filter" aria-hidden="true"></i>{{__('Find Your  Car')}}</h5>
    </div>  
<div class="sidebar_filter">
  <form action="{{route('carlisting_search')}}" method="post">
    @csrf
    <div class="form-group select">
      <select class="form-control" name="brand">
        <option value="Select Brand">{{__('Select Brand')}}</option>
        @foreach ($brand as $item)
        <option value="{{$item->id}}">{{$item->BrandName}}</option>
        @endforeach
</select>
</div>
<div class="form-group select">
  <select class="form-control" name="fueltype">
    <option value="Select Fuel Type">{{__('Select Fuel Type')}}</option>
<option value="Petrol">Petrol</option>
<option value="Diesel">Diesel</option>
<option value="CNG">CNG</option>
  </select>
</div>
<div class="form-group">
  <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> {{__('Search Car')}}</button>
    </div>
   </form>
     </div>
@endif
          
             

        </div>

        <div class="sidebar_widget">
          @if(LaravelLocalization::getCurrentLocale() == 'ar')
          <div class="widget_heading" style="direction: rtl">
            <h5><i class="fa fa-car" aria-hidden="true"></i> {{__('Recently Listed Cars')}}</h5>
          </div>
          <div class="recent_addedcars" style="direction: rtl">
            <ul>
              @foreach ($car as $item)
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="{{route('v-details',['id'=>$item->id])}}" alt="image"><img src="{{asset('assets/images/'.$item->Vimage1)}}" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="{{route('v-details',['id'=>$item->id])}}">{{__($item->VehiclesTitle_ar)}} , {{__($item->brands->brand_ar)}}</a>
                  <p class="widget_price">{{__('Per Day')}} ${{$item->PricePerDay}}</p>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
              @else
              <div class="widget_heading">
                <h5><i class="fa fa-car" aria-hidden="true"></i> {{__('Recently Listed Cars')}}</h5>
              </div>
        <div class="recent_addedcars">
              <ul>
              @foreach ($car as $item)
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="{{route('v-details',['id'=>$item->id])}}" alt="image"><img src="{{asset('assets/images/'.$item->Vimage1)}}" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="{{route('v-details',['id'=>$item->id])}}">{{$item->brands->BrandName}} , {{$item->VehiclesTitle}}</a>
                  <p class="widget_price">${{$item->PricePerDay}} {{__('Per Day')}}</p>
                </div>
              </li>
              @endforeach
              @endif
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!-- /Listing--> 

@endsection