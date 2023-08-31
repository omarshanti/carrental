@extends('layouts.admin')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('adminpanel.rtl/plugins/bootstrap-select/bootstrap-select.min.css')}}">
@endsection
@section('content')
<div class="container" @if(LaravelLocalization::getCurrentLocale() == 'en') style="margin-left: 20px;width: 50%;margin-top: 50px" @else style="width: 50%;margin-top: 50px" @endif>
        

<div id="tableFooter" class="col-lg-12 col-12 layout-spacing" >
      <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                      <h4>{{__('Create User')}}</h4>
                      @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
        </ul>
         </div>
         @endif
                  </div>                       
              </div>
          </div>
          <br>
          <div class="widget-content widget-content-area" >
              <div class="table-responsive" >
                {!! Form::model($user, ['method' => 'PATCH','route' => ['admin.users.update', $user->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>User Status:</strong><br>
            <select class="selectpicker" name="status">
                <option @if($user->status == 'Enabled') selected @endif value="Enabled" data-content="<span class='badge badge-primary' style='margin-left:15px'>Enable</span>">Enable</option>
                <option @if($user->status == 'Disabled') selected @endif value="Disabled" data-content="<span class='badge badge-danger' style='margin-left:15px'>Disable</span>">Disable</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

{!! Form::close() !!}

                
              </div>
          </div>
      </div>
    </div>
        
</div>
@endsection

@section('script')
 <script src="{{asset('adminpanel.ltr/assets/js/scrollspyNav.js')}}"></script>
 <script src="{{asset('adminpanel.ltr/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
@endsection
