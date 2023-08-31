@extends('layouts.app')

@section('content')
<div  id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
        <h3 class="modal-title">{{__('Password Recovery')}}</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="POST" action="{{route('postForgetPassword')}}">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="{{__('Your Email address*')}}" required="">
                </div>
                <div class="form-group">
                  <input type="submit" value="{{__('Send Request Password')}}"  class="btn btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{--  <div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Password Recovery</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form name="chngpwd" method="post" onSubmit="return valid();">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Your Email address*" required="">
                </div>
  <div class="form-group">
                  <input type="text" name="mobile" class="form-control" placeholder="Your Reg. Mobile*" required="">
                </div>
  <div class="form-group">
                  <input type="password" name="newpassword" class="form-control" placeholder="New Password*" required="">
                </div>
  <div class="form-group">
                  <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password*" required="">
                </div>
                <div class="form-group">
                  <input type="submit" value="Reset My Password" name="update" class="btn btn-block">
                </div>
              </form>
              <div class="text-center">
                <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  --}}

@endsection