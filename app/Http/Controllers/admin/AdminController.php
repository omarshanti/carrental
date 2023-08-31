<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Subscribe;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Vechicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {

        $book = Book::all();
        $test = Testimonial::all();
        $car = Vechicle::all();
        $brand = Brand::all();
        $user = User::all();
        $subs = Subscribe::all();
        $contact = Contact::all();
        return view('adminpanel.index')
            ->with('book', $book)
            ->with('test', $test)
            ->with('car', $car)
            ->with('brand', $brand)
            ->with('subs', $subs)
            ->with('contact', $contact)
            ->with('user', $user);
    }

    public function indexAdmin()
    {
        return view('adminpanel.Admin_profile.profile');
    }

    public function passwordView()
    {
        return view('adminpanel.Admin_profile.update-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required',
            'confirmpassword' => 'required',
        ]);
        // dd($request->all());
        $status = Hash::check($request->oldpassword, Auth::user()->password);
        $check = false;
        if ($status == true) {
            if ($request->password == $request->confirmpassword) {
                $user = User::find(Auth::user()->id);
                $user->update([
                    'password' => Hash::make($request->password),
                ]);
            }
            $check = true;
        }
        if ($check == true) {
            return redirect()->back()->with('success', 'Success! Password updated');
        } else {
            return redirect()->back()->with('failed', 'Failed! Password not updated');
        }
    }

    public function update(Request $request)
    {

        $id = Auth::user()->id;
        $user = User::find($id);
        $check =  $user->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'dob' => $request->dob,
            'Address' => $request->address,
            'City' => $request->city,
            'Country' => $request->country,
        ]);

        if ($check) {
            return redirect()->back()->with('success', 'Success! Data updated');
        } else {
            return redirect()->back()->with('failed', 'Failed! Data not updated');
        }
    }
}
