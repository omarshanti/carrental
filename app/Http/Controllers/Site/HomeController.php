<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\admin\VehiclesController;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Testimonial;
use App\Models\Username;
use App\Models\Vechicle;
use App\Models\About;
use App\Models\Book;
use App\Models\Contact;
use App\Models\Info;
use App\Models\Subscribe;
use App\Models\User;
use Hamcrest\Arrays\IsArray;
use Hamcrest\Type\IsObject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use stdClass;

class HomeController extends Controller
{
    public function index()
    {
        // get Vechical & Testimomial Informations from database and pass them to home view
        $data = Testimonial::with('user')->where('status', 1)->latest()->get();
        // dd($data);
        $brand = Vechicle::with('brands')->latest()->limit(6)->get();
        $tid = 1;
        $user_status = Testimonial::select('UserEmail', 'Testimonial')->where('status', $tid)->get()->toArray();
        // foreach ($user_status as $key => $val) {
        //     $user = Username::select('FullName')->where('EmailId', $val['UserEmail'])->get()->toArray();
        //     foreach ($user as $key => $value) {
        //         $data = array(['name' => $value['FullName'], 'Testimonial' => $val['Testimonial']]);
        //     }
        // }
        return view('index')->with('brand', $brand)->with('data', $data);
    }

    /*
 *   This  function dispaly car list
*/
    public function carlisting()
    {
        $count = Vechicle::all()->count();
        $car = Vechicle::with('brands')->orderBy("RegDate")->Paginate(4);
        $brand = Brand::all();
        // dd($about[0]['detail']);
        return view('car-listing')->with('car', $car)->with('count', $count)->with('brand', $brand);
    }

    public function carlisting_search(Request $request)
    {
        // dd($request->all());
        if ($request->brand !== 'Select Brand') {
            $b = $request->brand;
        }

        if ($request->fueltype !== 'Select Fuel Type') {
            $f = $request->fueltype;
        }

        if (!isset($b) & !isset($f)) {
            return redirect()->back()->with('failed', 'You Must Choose Brand Or Vehicles Type');
        } elseif (isset($b) || isset($f)) {

            if (isset($b)) {
                $car = Vechicle::with('brands')->where('VehiclesBrand', $b)->Paginate(4);
                $status = 0;
            }
            if (isset($f)) {
                $car = Vechicle::with('brands')->where('FuelType', $f)->Paginate(4);
                $status = 1;
            }
            if (isset($b) & isset($f)) {
                $car = Vechicle::with('brands')->where('FuelType', $f)->where('VehiclesBrand', $b)->Paginate(4);
                $status = 2;
            }
            // dd($status);
        }


        $count = Vechicle::all()->count();
        $brand = Brand::all();
        // dd($about[0]['detail']);
        return view('car-listing')->with('car', $car)->with('count', $count)->with('brand', $brand);
    }

    public function home_search(Request $request)
    {
        // dd($request->search);
        $search = $request->search;
         $car = Vechicle::with('Brands')
            ->Where(function ($query) use ($search) {
                $query->whereHas('Brands', function ($q) use ($search) {
                    $q->where('BrandName', 'like', '%' . $search . '%');
                      
                });
            })
            ->orWhere(function ($query) use ($search) {
                $query->whereHas('Brands', function ($q) use ($search) {
                    $q->where('brand_ar', 'like', '%' . $search . '%');
                      
                });
            })
            ->orWhere('VehiclesTitle','LIKE',"%$search%")
            ->orWhere('VehiclesTitle_ar','LIKE',"%$search%")
            ->orWhere('VehiclesOverview_ar','LIKE',"%$search%")
            ->orWhere('VehiclesOverview','LIKE',"%$search%")
            ->paginate(5);

        // }   
        // dd($car);
        $count = Vechicle::all()->count();
        $brand = Brand::all();
        // dd($about[0]['detail']);
        return view('car-listing')->with('car', $car)->with('count', $count)->with('brand', $brand);
    }
    public function faqs()
    {
        $about = About::where('id', 11)->get()->toArray();
        // dd($about[0]['detail']);
        return view('faqs')->with('about', $about);
    }

    public function contact()
    {
        $about = Info::first();
        //  dd($about);
        return view('contact-us')->with('about', $about);
    }

    public function v_details($id)
    {
        $data = Vechicle::find($id);
        $option = [
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
        // foreach($option as $key=>$value){
        //     echo $value;
        // }
        $car = Vechicle::with('Brands')->where('VehiclesBrand', $data->VehiclesBrand)->get();
        return view('vehical-details')
            ->with('data', $data)
            ->with('option', $option)
            ->with('car', $car);
    }

    public function postContact(Request $request)
    {

        $request->validate([
            'name' => 'required|max:100',
            'EmailId' => 'required|email',
            'message' => 'required|string',
            'ContactNo' => 'required|max:12|numeric',
        ]);

        $data = Contact::create([
            'name' => $request->name,
            'message' => $request->message,
            'EmailId' => $request->email,
            'ContactNo' => $request->contactno,
        ]);

        if ($data) {
            return redirect()->back()->with('success', 'Success! Inforamtions Sent Successfully');
        } else {
            return redirect()->back()->with('failed', 'Failed! Error In Informations');
        }
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'SubscriberEmail' => 'required|email|unique',
        ]);

        $data = Subscribe::create([
            'SubscriberEmail' => $request->subscriberemail,
        ]);

        if ($data) {
            return redirect()->back()->with('success', 'Success! Subscribed successfully.');
        } else {
            return redirect()->back()->with('failed', 'Failed! Something went wrong. Please try again');
        }
    }

    public function forgetPassword()
    {
        return view('forget');
    }

    public function postForgetPassword(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) {
            return redirect()->back()->with('failed', 'Sorry This Email Not Sign up In Carrenal');
        }

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('success', 'Request Password Has Been Sent To Your Email');
        }
    }
}
