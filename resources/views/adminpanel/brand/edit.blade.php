@extends('layouts.admin')
@section('style')

@section('content')
@section('script')

@endsection
<div class="container" @if(LaravelLocalization::getCurrentLocale() == 'en') style="margin-left: 20px;width: 50%;margin-top: 50px" @else style="width: 50%;margin-top: 50px" @endif>
        
         <div id="tableFooter" class="col-lg-12 col-12 layout-spacing" >
          <div class="statbox widget box box-shadow">
              <div class="widget-header">
                  <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                          <h4>{{__('Update Brand')}}</h4>
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
                    <form method="post" action="{{route('admin.brand.update',['id'=>$brand->id])}}">
                      @csrf
                      <div class="form-group">
                        <input type="text" class="form-control" name="brandName" value="{{$brand->BrandName}}" placeholder="{{__('Brand Name In English')}}">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="brandName_ar" value="{{$brand->brand_ar}}" placeholder="{{__('Brand Name In Arabic')}}">
                      </div>
                      <button type="submit" class="btn btn-primary">{{__('Update')}}</button>
                    </form>
                  </div>
              </div>
          </div>
        </div>
            
    </div>
    
</div>
@endsection
