@extends('layouts.app')

@section('content')

<div  id="loginform">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
       
          <h3 class="modal-title">{{__('Login')}}</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="login_wrap">
              <div class="col-md-12 col-sm-6">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="{{__('Email address')}}*">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="{{__('Password')}}*">
                  </div>
                  <div class="form-group checkbox">
                    <input type="checkbox" id="terms_agree" >
                    <label for="terms_agree">{{__('Remeber Me')}}</label>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="login" value="{{__('Login')}}" class="btn btn-block">
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <p>{{__('Dont have an account?')}} <a href="{{route('register')}}" data-toggle="modal" data-dismiss="modal">{{__('Signup Here')}}</a></p>
          <p><a href="{{route('forgetPassword')}}" data-toggle="modal" data-dismiss="modal">{{__('Forgot Password ?')}}</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection