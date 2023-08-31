@extends('layouts.admin')

@section('content')
<div class="container" @if(LaravelLocalization::getCurrentLocale() == 'en') style="margin-left: 20px;width: 50%;margin-top: 50px" @else style="width: 50%;margin-top: 50px" @endif>

  <div id="tableFooter" class="col-lg-12 col-12 layout-spacing" >
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>{{__('Site Contact Informations')}}</h4>
                </div>                       
            </div>
        </div>
        <br>
        <div class="widget-content widget-content-area" >
            <div class="table-responsive" >
              <form method="post" action="{{route('admin.post.websiteInfo',['id'=>$data->id])}}">
                @csrf
                <h5>{{__('Update Contact Info')}}</h5>
                <br>
                <br>
                @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
                </ul>
                 </div>
                 @endif
                 {{__('Email')}}:
                <div class="form-row mb-4">
                 
                  <div class="col">
                    <input type="text" class="form-control" name="email" placeholder="{{__('Email')}}" value="{{$data->email}}">
                  </div>
                </div>
                {{__('Address')}}:
                <div class="form-row mb-4">
            
                    <div class="col">
                      <textarea class="form-control" name="address" id=""  placeholder="{{__('Address')}}">{{$data->address}}</textarea>
                    </div>
                  </div>
                  {{__('Contact Number')}}:
                  <div class="form-row mb-4">
                   
                    <div class="col">
                      <input type="text" class="form-control" name="phone" value="{{$data->phone}}" placeholder="{{__('Contact Number')}}">
                    </div>
                  </div>
                  <input type="submit"  value="{{__('Update')}}" class="mb-4 btn btn-primary">
            </form>
        </div>
    </div>
  </div>
      
 </div>
</div>
@endsection