@extends('layouts.app')

@section('content')
<div class="" id="signupform">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          
          <h3 class="modal-title">{{__('Sign Up')}}</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="signup_wrap">
              <div class="col-md-12 col-sm-6">
                <form  method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="{{__('Full Name')}}" required="required">
                  </div>
                        <div class="form-group">
                    <input type="text" class="form-control" name="mobile" placeholder="{{__('Mobile Number')}}" maxlength="10" required="required">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email"  onBlur="checkAvailability()" placeholder="{{__('Email Address')}}" required="required">
                     <span id="user-availability-status" style="font-size:12px;"></span> 
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password"  id="password" placeholder="{{__('Password')}}" required="required">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{__('Confirm Password')}}" required="required">
                  </div>
                  <div class="form-group checkbox">
                    <input type="checkbox" id="terms_agree" required="required" checked="">
                    <label for="terms_agree">{{__('I Agree with')}} <a href="#">{{__('Terms and Conditions')}}</a></label>
                  </div>
                  <div class="form-group">
                    <button type="submit"   class="btn btn-block">{{__('Register')}}</button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <p>{{__('Already got an account?')}} <a href="{{route('login')}}" data-toggle="modal" data-dismiss="modal">{{__('Login Here')}}</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection