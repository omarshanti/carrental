@extends('layouts.admin')
@section('style')

@section('content')

<div  @if(LaravelLocalization::getCurrentLocale() == 'en') class="container mediaSize" style="display: flex !important; max-width: 100% !important; margin-left: 2px !important;
  " @else class="container mediaSize" style="display: flex !important; max-width: 100% !important; margin-right: 2px !important;
  " @endif >
 
                <br>
       
      
         <div id="tableFooter" class="col-lg-12 col-12 layout-spacing" >
          <div class="statbox widget box box-shadow">
              <div class="widget-header">
                  <div class="row">
                      <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                          <h4>{{__('Post A Vehicle')}}</h4>
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
                    <form method="post" action="{{route('admin.Vehicles.update',['id'=>$car->id])}}" enctype="multipart/form-data">
                      @csrf
                      <h5>{{__('BASIC INFO')}}</h5>
                      <div class="form-row mb-4">
                        <div class="col">
                          <input type="text" class="form-control" name="VehiclesTitle" value="{{$car->VehiclesTitle}}" placeholder="{{__('Vehicles Title In Arabic')}}">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" name="VehiclesTitle_ar" value="{{$car->VehiclesTitle_ar}}" placeholder="{{__('Vehicles Title In Arabic')}}">
                        </div>
                          <select class="selectpicker" name="VehiclesBrand" @if(LaravelLocalization::getCurrentLocale() == 'en') style="margin-right: 10px" @else style="margin-left: 10px"   @endif>
                            <option>{{__('Select Brand')}}</option>
                            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            @foreach($brand as $brands)
                            <option value="{{$brands->id}}" @if($car->brands->id == $brands->id) selected @endif>{{$brands->brand_ar}}</option>
                            @endforeach
                            @else
                            @foreach($brand as $brands)
                            <option value="{{$brands->id}}" @if($car->brands->id == $brands->id) selected @endif>{{$brands->BrandName}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-row mb-4">
                    <div class="col">
                      <textarea class="form-control" name="VehiclesOverview" id="" placeholder="{{__('Vehical Overview In English')}}" >{{$car->VehiclesOverview}}</textarea>
                    </div>
                    <div class="col">
                      <textarea class="form-control" name="VehiclesOverview_ar" id=""  placeholder="{{__('Vehical Overview In Arabic')}}">{{$car->VehiclesOverview_ar}}</textarea>
                    </div>
                  </div>
                  <div class="form-row mb-4">
                    <div class="col">
                      <input type="text" class="form-control" name="PricePerDay" placeholder="{{__('Price Per Day(in USD)')}}" value="{{$car->PricePerDay}}">
                    </div>
                      <select class="selectpicker" name="FuelType" @if(LaravelLocalization::getCurrentLocale() == 'en') style="margin-right: 10px" @else style="margin-left: 10px"   @endif> 
                        <option>{{__('Select Fuel Type')}}</option>
                        <option value="PETROL" @if($car->FuelType == "PETROL") selected @endif>{{__('PETROL')}}</option>
                        <option value="DIESEL" @if($car->FuelType == "DIESEL") selected @endif>{{__('DIESEL')}}</option>
                        <option value="CNG" @if($car->FuelType == "CNG") selected @endif>{{__('CNG')}}</option>
                    </select>
                   </div>
                   <div class="form-row mb-4">
                    <div class="col">
                      <input type="text" class="form-control" name="ModelYear" placeholder="{{__('Model Year')}}" value="{{$car->ModelYear}}">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="SeatingCapacity" placeholder="{{__('Seating Capacity')}}" value="{{$car->SeatingCapacity}}">
                    </div>
                  </div>
                  <h5>{{__('Upload Images')}}</h5>
                  <img src="{{asset('assets/images/'.$car->Vimage1)}}" width="200px" height="200px" alt="">
                  <div class="custom-file mb-4">
                    <input type="file" class="custom-file-input" id="customFile" name="Vimage1">
                    <label class="custom-file-label" for="customFile" >{{__('Image1')}}*</label>
                </div>
                <img src="{{asset('assets/images/'.$car->Vimage2)}}" width="200px" height="200px" alt="">
                <div class="custom-file mb-4">
                  <input type="file" class="custom-file-input" id="customFile" name="Vimage2">
                  <label class="custom-file-label" for="customFile">{{__('Image2')}}*</label>
              </div>
              <img src="{{asset('assets/images/'.$car->Vimage3)}}" width="200px" height="200px" alt="">
              <div class="custom-file mb-4">
                <input type="file" class="custom-file-input" id="customFile" name="Vimage3">
                <label class="custom-file-label" for="customFile">{{__('Image3')}}*</label>
            </div>
            <img src="{{asset('assets/images/'.$car->Vimage4)}}" width="200px" height="200px" alt="">
            <div class="custom-file mb-4">
              <input type="file" class="custom-file-input" id="customFile" name="Vimage4">
              <label class="custom-file-label" for="customFile">{{__('Image4')}}*</label>
            </div>
            @if($car->Vimage5)
            <img src="{{asset('assets/images/'.$car->Vimage5)}}" width="200px" height="200px" alt="">
            @endif
            <div class="custom-file mb-4">
            <input type="file" class="custom-file-input" id="customFile" name="Vimage5">
            <label class="custom-file-label" for="customFile">{{__('Image5')}}</label>
            </div>
            <h5>{{__('ACCESSORIES')}}</h5>
            {{--  @foreach($option as $options)
            <div class="n-chk">
            <label class="new-control new-checkbox checkbox-primary">
            <input type="hidden" name="{{$options}}" value="0" />
            <input type="checkbox" class="new-control-input" name="{{$options}}" value="1" >
            <span class="new-control-indicator" style="color: black">{{$options}}</span>
            </label>
            </div>
            @endforeach  --}}
            <div class="form-group">
              @if($car->AirConditioner==1)
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="AirConditioner" checked value="1">
              <label for="inlineCheckbox1"> {{__('AirConditioner')}} </label>
              </div>
              @else
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="AirConditioner" value="1">
              <label for="inlineCheckbox1"> {{__('AirConditioner')}} </label>
              </div>
              @endif
              @if($car->PowerDoorLocks==1)
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="PowerDoorLocks" checked value="1">
              <label for="inlineCheckbox2"> {{__('PowerDoorLocks')}} </label>
              </div>
              @else 
              <div class="checkbox checkbox-success checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="PowerDoorLocks" value="1">
              <label for="inlineCheckbox2"> {{__('PowerDoorLocks')}} </label>
              </div>
              @endif
              @if($car->AntiLockBrakingSystem==1)
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="AntiLockBrakingSystem" checked value="1">
              <label for="inlineCheckbox3"> {{__('AntiLockBrakingSystem')}} </label>
              </div>
              @else 
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="AntiLockBrakingSystem" value="1">
              <label for="inlineCheckbox3"> {{__('AntiLockBrakingSystem')}} </label>
              </div>
            
                @endif
              @if($car->BrakeAssist==1)
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="BrakeAssist" checked value="1">
              <label for="inlineCheckbox3"> {{__('BrakeAssist')}} </label>
              </div>
              @else 
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="BrakeAssist" value="1">
              <label  for="inlineCheckbox3"> {{__('BrakeAssist')}} </label>
              </div>
             
              
              <div class="form-group">
                @endif
              @if($car->PowerSteering==1)
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="PowerSteering" checked value="1">
              <label for="inlineCheckbox1"> {{__('PowerSteering')}}  </label>
              @else 
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="PowerSteering" value="1">
              <label for="inlineCheckbox1"> {{__('PowerSteering')}} </label>
              </div>
                @endif
              @if($car->DriverAirbag==1)
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="DriverAirbag" checked value="1">
              <label for="inlineCheckbox2">{{__('DriverAirbag')}}</label>
              </div>
              @else
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="DriverAirbag" value="1">
              <label for="inlineCheckbox2">{{__('DriverAirbag')}}</label>
              </div>
              <div class="col-sm-3">
              @endif
              @if($car->DriverAirbag==1)
             
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="PassengerAirbag" checked value="1">
              <label for="inlineCheckbox3"> {{__('PassengerAirbag')}} </label>
              </div>
              @else 
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="PassengerAirbag" value="1">
              <label for="inlineCheckbox3"> {{__('PassengerAirbag')}} </label>
              </div>
                @endif
              @if($car->PowerWindows==1)
              
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="PowerWindows" checked value="1">
              <label for="inlineCheckbox3"> {{__('PowerWindows')}} </label>
              </div>
              @else 
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="PowerWindows" value="1">
              <label for="inlineCheckbox3"> {{__('PowerWindows')}} </label>
              </div>
              </div>
              
              
              <div class="form-group">
                @endif
             @if($car->CDPlayer==1)
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="CDPlayer" checked value="1">
              <label for="inlineCheckbox1"> {{__('CDPlayer')}} </label>
              </div>
             @else
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="CDPlayer" value="1">
              <label for="inlineCheckbox1"> {{__('CDPlayer')}} </label>
              </div>
                @endif
              @if($car->CentralLocking==1)
              <div class="checkbox  checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="CentralLocking" checked value="1">
              <label for="inlineCheckbox2">{{__('CentralLocking')}}</label>
              </div>
              @else 
              <div class="checkbox checkbox-success checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="CentralLocking" value="1">
              <label for="inlineCheckbox2">{{__('CentralLocking')}}</label>
              </div>
                @endif
              @if($car->CrashSensor==1)
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="CrashSensor" checked value="1">
              <label for="inlineCheckbox3"> {{__('CrashSensor')}} </label>
              </div>
              @else 
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="CrashSensor" value="1">
              <label for="inlineCheckbox3"> {{__('CrashSensor')}} </label>
              </div>
              @endif
              @if($car->CrashSensor==1)
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="LeatherSeats" checked value="1">
              <label for="inlineCheckbox3"> {{__('LeatherSeats')}}  </label>
              </div>
              @else
              <div class="checkbox checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="LeatherSeats" value="1">
              <label for="inlineCheckbox3"> {{__('LeatherSeats')}} </label>
              </div>
              @endif
                    <input type="submit"  value="{{__('Update')}}" class="mb-4 btn btn-primary">
                    </form>
                  </div>
              </div>
          </div>
        </div>


</div>

@endsection
