@extends('layouts.app')

@section('content')
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>{{htmlentities(__("Terms and Conditions"))}}</h1>
      </div>
      @if(LaravelLocalization::getCurrentLocale() == 'ar')
      <ul class="coustom-breadcrumb" style="direction: rtl">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{htmlentities(__("Terms and Conditions"))}}</li>
      </ul>
      @else
      <ul class="coustom-breadcrumb">
        <li><a href="{{route('index')}}">{{__('HOME')}}</a></li>
        <li>{{htmlentities(__("Terms and Conditions"))}}</li>
      </ul>
      @endif
   
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<section class="about_us section-padding">
  <div class="container">
    <div class="section-header text-center">


      <h2>{{htmlentities(__("Terms and Conditions"))}}</h2>
      @if(LaravelLocalization::getCurrentLocale() == 'en')  
      <p>{!!html_entity_decode($about[0]['detail'])!!}</p>
      @elseif(LaravelLocalization::getCurrentLocale() == 'ar') 
      <p>{!!html_entity_decode($about[0]['detail_ar'])!!}</p>
      @endif
    </div>
  </div>
</section>
<!-- /About-us--> 
@endsection