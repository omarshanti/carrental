<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Vechicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Vechicle::with('Brands')->paginate(50);
     
        return view('adminpanel.car.show')->with('car',$car);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $option = [
            'AirConditioner',
            'PowerDoorLocks',
            'AntiLockBrakingSystem',
            'BrakeAssist',
            'PowerSteering',
            'DriverAirbag',
            'PassengerAirbag', 
            'PowerWindows',
            'CDPlayer',
            'CentralLocking',
            'CrashSensor', 
            'LeatherSeats' 
        ];
        $brand = Brand::all();
        return view('adminpanel.car.create')->with('option',$option)->with('brand',$brand);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'VehiclesTitle' =>'required',
            'VehiclesTitle_ar' =>'required',
            'VehiclesBrand' =>'required',
            'VehiclesOverview' =>'required',
            'VehiclesOverview_ar' =>'required',
            'PricePerDay' =>'required',
            'FuelType' =>'required',
            'ModelYear' =>'required',
            'SeatingCapacity' =>'required',
            'Vimage1' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Vimage2' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Vimage3' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Vimage4' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Vimage5' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'AirConditioner' =>'required',
            'PowerDoorLocks' =>'required',
            'AntiLockBrakingSystem' =>'required',
            'BrakeAssist'=>'required',
            'PowerSteering' =>'required',
            'DriverAirbag' =>'required',
            'PassengerAirbag' =>'required',
            'PowerWindows' =>'required',
            'CDPlayer' =>'required',
            'CentralLocking' =>'required',
            'CrashSensor' =>'required',
            'LeatherSeats'=>'required',

         ]);
        if($request->hasFile('Vimage1')){
            $image1=$request->file('Vimage1');
            $Vimage1=time().'.'.$image1->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image1->move($dest1,$Vimage1);
        }
        if($request->hasFile('Vimage2')){
            $image2=$request->file('Vimage2');
            $Vimage2=time().'.'.$image2->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image2->move($dest1,$Vimage2);
        }
        if($request->hasFile('Vimage3')){
            $image3=$request->file('Vimage3');
            $Vimage3=time().'.'.$image3->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image3->move($dest1,$Vimage3);
        }
        if($request->hasFile('Vimage4')){
            $image4=$request->file('Vimage4');
            $Vimage4=time().'.'.$image4->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image4->move($dest1,$Vimage4);
        }
        if($request->hasFile('Vimage5')){
            $image5=$request->file('Vimage5');
            $Vimage5=time().'.'.$image5->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image5->move($dest1,$Vimage5);
        }
            
         $car = Vechicle::create([
            'VehiclesTitle' => $request->VehiclesTitle,
            'VehiclesTitle_ar' => $request->VehiclesTitle_ar,
            'VehiclesBrand' => $request->VehiclesBrand,
            'VehiclesOverview' => $request->VehiclesOverview,
            'VehiclesOverview_ar' => $request->VehiclesOverview_ar,
            'PricePerDay' => $request->PricePerDay,
            'FuelType' => $request->FuelType,
            'ModelYear' => $request->ModelYear,
            'SeatingCapacity' => $request->SeatingCapacity,
            'Vimage1' => $Vimage1,
            'Vimage2' => $Vimage2,
            'Vimage3' => $Vimage3,
            'Vimage4' => $Vimage4,
            'Vimage5' => $Vimage5,
            'AirConditioner'=> $request->AirConditioner,
            'PowerDoorLocks'=> $request->PowerDoorLocks,
            'AntiLockBrakingSystem'=> $request->AntiLockBrakingSystem,
            'BrakeAssist'=> $request->BrakeAssist,
            'PowerSteering'=> $request->PowerSteering,
            'DriverAirbag'=> $request->DriverAirbag,
            'PassengerAirbag'=> $request->PassengerAirbag, 
            'PowerWindows'=> $request->PowerWindows,
            'CDPlayer'=> $request->CDPlayer,
            'CentralLocking'=> $request->CentralLocking,
            'CrashSensor'=> $request->CrashSensor, 
            'LeatherSeats'=> $request->LeatherSeats 
         ]);
         if ($car) {
            return redirect()->back()->with('success', 'Success! Vechicle Created');
         }
        else {
            return redirect()->back()->with('failed', 'Failed! Vechicle not Created');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Vechicle::find($id);
        $option = [
            'AirConditioner',
            'PowerDoorLocks',
            'AntiLockBrakingSystem',
            'BrakeAssist',
            'PowerSteering',
            'DriverAirbag',
            'PassengerAirbag', 
            'PowerWindows',
            'CDPlayer',
            'CentralLocking',
            'CrashSensor', 
            'LeatherSeats' 
        ];
        $data = Vechicle::find($id);
        $check = [
            'AirConditioner' => $data->AirConditioner,
            'PowerDoorLocks' => $data->PowerDoorLocks,
            'AntiLockBrakingSystem' => $data->AntiLockBrakingSystem,
            'BrakeAssist' => $data->BrakeAssist,
            'PowerSteering' => $data->PowerSteering,
            'DriverAirbag' => $data->DriverAirbag,
            'PassengerAirbag' => $data->PassengerAirbag,
            'PowerWindows' => $data->PowerWindows,
            'CDPlayer' => $data->CDPlayer,
            'CentralLocking' => $data->CentralLocking,
            'CrashSensor' => $data->CrashSensor,
            'LeatherSeats' => $data->LeatherSeats,
        ];
        $brand = Brand::all();
        return view('adminpanel.car.edit')->with('option',$option)->with('brand',$brand)->with('car',$car)->with('check',$check);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Vechicle::find($id);
        // dd($request->all());
        if($request->hasFile('Vimage1')){
            $image1=$request->file('Vimage1');
            $Vimage1=time().'.'.$image1->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image1->move($dest1,$Vimage1);
        }
        if($request->hasFile('Vimage2')){
            $image2=$request->file('Vimage2');
            $Vimage2=time().'.'.$image2->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image2->move($dest1,$Vimage2);
        }
        if($request->hasFile('Vimage3')){
            $image3=$request->file('Vimage3');
            $Vimage3=time().'.'.$image3->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image3->move($dest1,$Vimage3);
        }
        if($request->hasFile('Vimage4')){
            $image4=$request->file('Vimage4');
            $Vimage4=time().'.'.$image4->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image4->move($dest1,$Vimage4);
        }
        if($request->hasFile('Vimage5')){
            $image5=$request->file('Vimage5');
            $Vimage5=time().'.'.$image5->getClientOriginalName();
            $dest1=public_path('/assets/images');
            $image5->move($dest1,$Vimage5);
        }
            // dd($request->all());
         $car->update([
            'VehiclesTitle' => $request->VehiclesTitle,
            'VehiclesBrand' => $request->VehiclesBrand,
            'VehiclesOverview' => $request->VehiclesOverview,
            'PricePerDay' => $request->PricePerDay,
            'FuelType' => $request->FuelType,
            'ModelYear' => $request->ModelYear,
            'SeatingCapacity' => $request->SeatingCapacity,
            'Vimage1' => $request->hasFile('Vimage1') ? $Vimage1 : $car->Vimage1,
            'Vimage2' => $request->hasFile('Vimage2') ? $Vimage2 : $car->Vimage2,
            'Vimage3' => $request->hasFile('Vimage3') ? $Vimage3 : $car->Vimage3,
            'Vimage4' => $request->hasFile('Vimage4') ? $Vimage4 : $car->Vimage4,
            'Vimage5' => $request->hasFile('Vimage5') ? $Vimage5 : $car->Vimage5,
            'AirConditioner'=> $request->AirConditioner,
            'PowerDoorLocks'=> $request->PowerDoorLocks,
            'AntiLockBrakingSystem'=> $request->AntiLockBrakingSystem,
            'BrakeAssist'=> $request->BrakeAssist,
            'PowerSteering'=> $request->PowerSteering,
            'DriverAirbag'=> $request->DriverAirbag,
            'PassengerAirbag'=> $request->PassengerAirbag, 
            'PowerWindows'=> $request->PowerWindows,
            'CDPlayer'=> $request->CDPlayer,
            'CentralLocking'=> $request->CentralLocking,
            'CrashSensor'=> $request->CrashSensor, 
            'LeatherSeats'=> $request->LeatherSeats 
         ]);
         $status = true;
         if ($status == true ) {
            return redirect()->back()->with('success', 'Success! Vechicle Updated');
         }
        else {
            return redirect()->back()->with('failed', 'Failed! Vechicle not Updated');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Vechicle::find($id);
        $car->delete();
        $status = true;
        if ($status == true ) {
           return redirect()->back()->with('success', 'Success! Vechicle Deleted');
        }
       else {
           return redirect()->back()->with('failed', 'Failed! Vechicle not Updated');
        }
    }
}
