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
                    <h4>UPDATE ADMIN PASSWORD</h4>
                </div>                       
            </div>
        </div>
        <br>
        <div class="widget-content widget-content-area" >
            <div class="table-responsive" >
              <form  method="post" action="{{route('admin.passsword.update')}}">
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
                  <input type="submit"  value="{{__('Update')}}" class="mb-4 btn btn-primary">
                </div>
             </form>
        </div>
    </div>
  </div>
      
 </div>
</div>
@endsection

