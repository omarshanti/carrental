@extends('layouts.admin')

@section('content')
<div class="container" @if(LaravelLocalization::getCurrentLocale() == 'en') style="margin-left: 20px;width: 50%;margin-top: 50px" @else style="width: 50%;margin-top: 50px" @endif>
        

<div id="tableFooter" class="col-lg-12 col-12 layout-spacing" style="font-weight: bold;color: black">
      <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                      <h4>{{__('Create Role')}}</h4>
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
                {!! Form::model($role, ['method' => 'PATCH','route' => ['admin.roles.update', $role->id]]) !!}
                        @csrf
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {!! Form::text('name', $role->name, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br/>
                                    @foreach($permission as $value)
                                        <label style="color: black">{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                        {{ $value->name }}</label>
                                    <br/>
                                    @endforeach
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
