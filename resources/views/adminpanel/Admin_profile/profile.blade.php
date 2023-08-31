@extends('layouts.admin')

@section('content')
<div class="container" @if(LaravelLocalization::getCurrentLocale() == 'en') style="display: flex !important; max-width: 100% !important; margin-left: 2px !important;
  padding: 0 50px ! important;" @else style="display: flex !important; max-width: 100% !important; margin-right: 2px !important;
  padding: 0 50px ! important;" @endif >

  <div id="tableFooter" class="col-lg-12 col-12 layout-spacing" >
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>MANAGE ADMIN PROFILE</h4>
                </div>                       
            </div>
        </div>
        <br>
        <div class="widget-content widget-content-area" >
            <div class="table-responsive" >
              <form  method="POST" action="{{route('admin.profile.update', ['id' => Auth::user()->id])}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <div class="form-group">
                 <label class="control-label">{{__('Reg Date')}} -</label>
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
                 <input class="form-control white_bg" value="{{Auth::user()->email}}" name="email" id="email" type="email" required >
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
                  <input type="submit"  value="{{__('Save Changes')}}" class="mb-4 btn btn-primary">

                 </div>
              </form>
        </div>
    </div>
  </div>
      
 </div>
</div>
@endsection






