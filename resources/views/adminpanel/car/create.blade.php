@extends('layouts.admin')
@section('style')
@if(LaravelLocalization::getCurrentLocale() == 'ar')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset('adminpanel.rtl/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('adminpanel.rtl/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
@else
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset('adminpanel.ltr/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('adminpanel.ltr/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
@endif
@section('content')
<br>
<div  @if(LaravelLocalization::getCurrentLocale() == 'en') class="container mediaSize" style="display: flex !important; max-width: 100% !important; margin-left: 2px !important;
  " @else class="container mediaSize" style="display: flex !important; max-width: 100% !important; margin-right: 2px !important;
  " @endif >
         <div id="tableFooter" class="col-lg-12 col-12 layout-spacing" >
          <div class="statbox widget box box-shadow">
              <div class="widget-header">
                  <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                          <h4>{{__('Post A Vehicle')}}</h4>
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
                      </div>                       
                  </div>
              </div>
              <br>
              <div class="widget-content widget-content-area" >
                  <div class="table-responsive" >
                    <form method="post" action="{{route('admin.Vehicles.create.post')}}" enctype="multipart/form-data">
                      @csrf
                      <h5>{{__('BASIC INFO')}}</h5>
                      <div class="form-row mb-4">
                        <div class="col">
                          <input type="text" class="form-control" name="VehiclesTitle" placeholder="{{__('Vehicles Title In English')}}">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" name="VehiclesTitle_ar" placeholder="{{__('Vehicles Title In Arabic')}}">
                        </div>
                          <select class="selectpicker" name="VehiclesBrand" @if(LaravelLocalization::getCurrentLocale() == 'en') style="margin-right: 10px" @else style="margin-left: 10px"   @endif>
                            <option>{{__('Select Brand')}}</option>
                            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            @foreach($brand as $brands)
                            <option value="{{$brands->id}}">{{$brands->brand_ar}}</option>
                            @endforeach
                            @else
                            @foreach($brand as $brands)
                            <option value="{{$brands->id}}">{{$brands->BrandName}}</option>
                            @endforeach
                            @endif
                            
                        </select>
                    </div>
                    <div class="form-row mb-4">
                    <div class="col">
                      <textarea class="form-control" name="VehiclesOverview" id=""  placeholder="{{__('Vehical Overview In English')}}"></textarea>
                    </div>
                    <div class="col">
                      <textarea class="form-control" name="VehiclesOverview_ar" id=""  placeholder="{{__('Vehical Overview In Arabic')}}"></textarea>
                    </div>
                  </div>
                  <div class="form-row mb-4">
                    <div class="col">
                      <input type="text" class="form-control" name="PricePerDay" placeholder="{{__('Price Per Day(in USD)')}}">
                    </div>
                      <select class="selectpicker" name="FuelType"  @if(LaravelLocalization::getCurrentLocale() == 'en') style="margin-right: 10px" @else style="margin-left: 10px"   @endif>
                        <option>{{__('Select Fuel Type')}}</option>
                        <option value="PETROL">{{__('PETROL')}}</option>
                        <option value="DIESEL">{{__('DIESEL')}}</option>
                        <option value="CNG">{{__('CNG')}}</option>
                    </select>
                   </div>
                   <div class="form-row mb-4">
                    <div class="col">
                      <input type="text" class="form-control" name="ModelYear" placeholder="{{__('Model Year')}}">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="SeatingCapacity" placeholder="{{__('Seating Capacity')}}">
                    </div>
                  </div>
                  <h5>{{__('Upload Images')}}</h5>
                  <div class="custom-file-container" data-upload-id="Image1">
                    <label>{{__('Upload (Single File)')}} <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">{{__('Image1')}}</a></label>
                    <label class="custom-file-container__custom-file" >
                        <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="Vimage1">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>
                <div class="custom-file-container" data-upload-id="Image2">
                  <label>{{__('Upload (Single File)')}} <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">{{__('Image2')}}</a></label>
                  <label class="custom-file-container__custom-file" >
                      <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="Vimage2">
                      <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                      <span class="custom-file-container__custom-file__custom-file-control"></span>
                  </label>
                  <div class="custom-file-container__image-preview"></div>
              </div>
              <div class="custom-file-container" data-upload-id="Image3">
                <label>{{__('Upload (Single File)')}} <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">{{__('Image3')}}</a></label>
                <label class="custom-file-container__custom-file" >
                    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="Vimage3">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
            <div class="custom-file-container" data-upload-id="Image4">
              <label>{{__('Upload (Single File)')}} <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">{{__('Image4')}}</a></label>
              <label class="custom-file-container__custom-file" >
                  <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="Vimage4">
                  <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                  <span class="custom-file-container__custom-file__custom-file-control"></span>
              </label>
              <div class="custom-file-container__image-preview"></div>
          </div>
           <div class="custom-file-container" data-upload-id="Image5">
                    <label>{{__('Upload (Single File)')}} <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">{{__('Image5')}}</a></label>
                    <label class="custom-file-container__custom-file" >
                        <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="Vimage5">
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                    </label>
                    <div class="custom-file-container__image-preview"></div>
                </div>
                
        <h5>{{__('ACCESSORIES')}}</h5>
        @foreach($option as $options)
        <div class="n-chk">
          <label class="new-control new-checkbox checkbox-primary">
            <input type="hidden" name="{{$options}}" value="0" />
            <input type="checkbox" class="new-control-input" name="{{$options}}" value="1">
            <span class="new-control-indicator" style="color: black">{{__($options)}}</span>
          </label>
      </div>
      @endforeach
                    <input type="submit"  value="{{__('Create')}}" class="mb-4 btn btn-primary">
       </form>
                  </div>
              </div>
          </div>
        </div>


</div>
@endsection
@section('script')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('adminpanel.ltr/assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('adminpanel.ltr/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

<script>
    //First upload
    var Image1 = new FileUploadWithPreview('Image1')
    //Second upload
    var Image2= new FileUploadWithPreview('Image2')
    var Image3= new FileUploadWithPreview('Image3')
    var Image4= new FileUploadWithPreview('Image4')
    var Image5= new FileUploadWithPreview('Image5')
</script>
<!-- END PAGE LEVEL PLUGINS -->   
@endsection