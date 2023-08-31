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
<!--Listing-Image-Slider-->



<section id="listing_img_slider">
  <div><img src="{{asset('assets/images/'.$data->Vimage1)}}" class="img-responsive" alt="image" width="900" height="560"></div>
  @if($data->Vimage2)
  <div><img src="{{asset('assets/images/'.$data->Vimage2)}}" class="img-responsive" alt="image" width="900" height="560"></div>
  @endif
  @if($data->Vimage3)
  <div><img src="{{asset('assets/images/'.$data->Vimage3)}}" class="img-responsive" alt="image" width="900" height="560"></div>
  @endif
  @if($data->Vimage4)
  <div><img src="{{asset('assets/images/'.$data->Vimage4)}}" class="img-responsive"  alt="image" width="900" height="560"></div>
  @endif
    @if ($data->Vimage5 !== "")   
    <div><img src="{{asset('assets/images/'.$data->Vimage5)}}" class="img-responsive" alt="image" width="900" height="560"></div>  
    @endif
</section>
<!--/Listing-Image-Slider-->


<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      @if(LaravelLocalization::getCurrentLocale() == 'ar') 
      <div class="col-md-9">
        <h2 @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right;" @endif>{{$data->VehiclesTitle_ar}} , {{$data->Brands->brand_ar}}</h2>
      </div> 
      <div class="col-md-3">
        <div class="price_info">
          <p>${{$data->PricePerDay}}</p>{{__('Per Day')}}
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
          
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>{{$data->ModelYear}}</h5>
              <p>{{__('Reg.Year')}}</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>{{__($data->FuelType)}}</h5>
              <p>{{__('Fuel Type')}}</p>
            </li>
       
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>{{$data->SeatingCapacity}}</h5>
              <p>{{__('Seats')}}</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist" style="direction: rtl">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">{{__('Vehicle Overview')}} </a></li>
          
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">{{__('Accessories')}}</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview" style="direction: rtl">
                
                <p>{{$data->VehiclesOverview_ar}}</p>
              </div>
              
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories" style="direction: rtl"> 
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">{{__('Accessories')}}</th>
                    </tr>
                  </thead>
                  <tbody>
@foreach($option as $key=>$value)
<tr>
<td>{{__($key)}}</td>
@if($value==1)
<td><i class="fa fa-check" aria-hidden="true"></i></td>
@else
<td><i class="fa fa-close" aria-hidden="true"></i></td>
@endif
 </tr>
@endforeach
      @else
      <div class="col-md-9">
        <h2>{{$data->Brands->BrandName}} , {{$data->VehiclesTitle}}</h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>${{$data->PricePerDay}} </p>{{__('Per Day')}}
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
          
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>{{$data->ModelYear}}</h5>
              <p>{{__('Reg.Year')}}</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>{{$data->FuelType}}</h5>
              <p>{{__('Fuel Type')}}</p>
            </li>
       
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>{{$data->SeatingCapacity}}</h5>
              <p>{{__('Seats')}}</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
          
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                
                <p>{{$data->VehiclesOverview}}</p>
              </div>
              
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories"> 
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Accessories</th>
                    </tr>
                  </thead>
                  <tbody>
@foreach($option as $key=>$value)
<tr>
<td>{{$key}}</td>
@if($value==1)
<td><i class="fa fa-check" aria-hidden="true"></i></td>
@else
<td><i class="fa fa-close" aria-hidden="true"></i></td>
@endif
 </tr>
@endforeach
      @endif

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>

   
      </div>
      
      <!--Side-Bar-->
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <aside class="col-md-3" style="direction: rtl">
      
        <div class="share_vehicle">
          @if(LaravelLocalization::getCurrentLocale() == 'ar')
          <p> <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>{{__('Share:')}} </p>
          @else
          <p>{{__('Share:')}} <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
          @endif
          
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>{{__('Book Now')}}</h5>
          </div>
          @if ($errors->any())
           <div class="alert alert-danger">
           <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
           </ul>
            </div>
            @endif
          <form method="post" action="{{route('v-details-book',['id'=>$data->id])}}">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="fromdate" placeholder="{{__('From Date(dd/mm/yyyy)')}}" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="todate" placeholder="{{__('To Date(dd/mm/yyyy)')}}" required>
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="{{__('Message.')}}" required></textarea>
            </div>
              @auth 
              <div class="form-group">
                <input type="submit" class="btn"   value="{{__('Book Now')}}">
              </div>
              @else
              <a href="{{route('login')}}" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">{{__('Login For Book')}}</a>
              @endauth

          </form>
        </div>
      </aside>
      @else
      <aside class="col-md-3" >
      
        <div class="share_vehicle">
          @if(LaravelLocalization::getCurrentLocale() == 'ar')
          <p> <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>{{__('Share:')}} </p>
          @else
          <p>{{__('Share:')}} <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
          @endif
          
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>{{__('Book Now')}}</h5>
          </div>
          @if ($errors->any())
           <div class="alert alert-danger">
           <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
           </ul>
            </div>
            @endif
          <form method="post" action="{{route('v-details-book',['id'=>$data->id])}}">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="fromdate" placeholder="{{__('From Date(dd/mm/yyyy)')}}" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="todate" placeholder="{{__('To Date(dd/mm/yyyy)')}}" required>
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="{{__('Message.')}}" required></textarea>
            </div>
              @auth 
              <div class="form-group">
                <input type="submit" class="btn"   value="{{__('Book Now')}}">
              </div>
              @else
              <a href="{{route('login')}}" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">{{__('Login For Book')}}</a>
              @endauth

          </form>
        </div>
      </aside>
      @endif
      <!--/Side-Bar--> 
    </div>
    
    <div class="space-20"></div>
    <div class="divider"></div>
    
    <!--Similar-Cars-->
        @if(LaravelLocalization::getCurrentLocale() == 'ar')
        <div class="similar_cars" style="direction: rtl">
          <h3 @if(LaravelLocalization::getCurrentLocale() == 'ar') style="margin-left: 987px;" @endif>{{__('Similar Cars')}}</h3>
          <div class="row grid_listing">
        @foreach($car as $cars) 
        <div class="col-md-3 ">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="{{route('v-details',['id'=>$cars->id])}}"><img src="{{asset('assets/images/'.$cars->Vimage1)}}" class="img-responsive" alt="image" /> </a>
            </div>
            <div class="product-listing-content">
              <h5><a href="{{route('v-details',['id'=>$cars->id])}}">{{$cars->VehiclesTitle_ar}} , {{$cars->Brands->brand_ar}}</a></h5>
              <p class="list-price">${{$cars->PricePerDay}}</p>
          
              <ul class="features_list">
                
             <li><i class="fa fa-user" aria-hidden="true"></i> {{$cars->SeatingCapacity}} {{__('Seats')}}</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$cars->ModelYear}} {{__('Model')}}</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>{{__($cars->FuelType)}}</li>
              </ul>
            </div>
          </div>
        </div>
       @endforeach
        @else
        <div class="similar_cars" >
          <h3>{{__('Similar Cars')}}</h3>
          <div class="row grid_listing">
        @foreach($car as $cars) 
        <div class="col-md-3 " style="direction: ltr">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="{{route('v-details',['id'=>$cars->id])}}"><img src="{{asset('assets/images/'.$cars->Vimage1)}}" class="img-responsive" alt="image" /> </a>
            </div>
            <div class="product-listing-content">
              <h5><a href="">{{$cars->Brands->BrandName}} , {{$cars->VehiclesTitle}}</a></h5>
              <p class="list-price">${{$cars->PricePerDay}}</p>
          
              <ul class="features_list">
                
             <li><i class="fa fa-user" aria-hidden="true"></i>{{$cars->SeatingCapacity}} seats</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$cars->ModelYear}} model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>{{$cars->FuelType}}</li>
              </ul>
            </div>
          </div>
        </div>
       @endforeach
        @endif
       

      </div>
    </div>
    <!--/Similar-Cars--> 
    
  </div>
</section>
<!--/Listing-detail--> 

@endsection