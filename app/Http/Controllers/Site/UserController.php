<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use App\Models\Vechicle;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function passwordView()
    {
        return view ('update-password');
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
        if($status == true){
            if($request->password == $request->confirmpassword){
                $user = User::find(Auth::user()->id);
                $user->update([
                    'password' => Hash::make($request->password),
                ]);
            }
           $check = true;
        }
        if ($check == true) {
            return redirect()->back()->with('success', 'Success! Password updated');
        }
        else {
            return redirect()->back()->with('failed', 'Failed! Password not updated');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $request->validate([
            'name' => 'string',
            'mobile' => 'numeric',
            'dob' => 'date',
            'Address' => 'max:250',
            'City' => 'string',
            'Country' => 'string',
         ]);
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
        // $this->dispatchBrowserEvent('toastr',[
        //     'message' => 'Data has been saved successfully'
        // ]);
        // Toastr::success('Data has been saved successfully','success');
        if ($check ) {
            return redirect()->back()->with('success', 'Success! Data updated');
        }
        else {
            return redirect()->back()->with('failed', 'Failed! Data not updated');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function my_booking()
    {
        $email= Auth::user()->email;
        $book= Book::with('cars')->where('userEmail',$email)->get();
        // dd($book);
        return view('my-booking')
        ->with('book',$book);
    }
    
    public function v_details_book(Request $request,$id){

        $request->validate([
            'fromdate' => 'required|date_format:d/m/Y',
            'todate' => 'required|date_format:d/m/Y',
            'message' => 'required|string',
        ]);
        $book = Book::create([
            'VehicleId' => $id,
            'userEmail' => Auth()->user()->email,
            'FromDate' => $request->fromdate,
            'ToDate' => $request->todate,
            'message' => $request->message,
            'Status' => 0,
        ]);
        if ($book) {
            return back()->with('success', 'Success! Book created');
        }
        else {
            return back()->with('failed', 'Failed! Book not created');
        }
    }

    public function testimonial() {
        return view ('post-testimonial');
    }

    public function post_testimonial(Request $request) {
        // dd($request->testimonial_ar);
        $request->validate([
            'testimonial_ar' => 'required',
            'testimonial' => 'required',
         ]);
        $data = Testimonial::create([
            'Testimonial' => $request->testimonial,
            'test_ar' => $request->testimonial_ar,
            'UserEmail' => Auth::user()->email,
            'status' => 1,

        ]);

        if ($data ) {
            return redirect()->back()->with('success', 'Success! Testimonial Created');
        }
        else {
            return redirect()->back()->with('failed', 'Failed! Testimonial not Created');
        }
    }

    public function my_testimonial() {
        $email = Auth::user()->email;
        $test = Testimonial::where('UserEmail',$email)->get();
        return view ('my-testimonials')->with('test',$test);
    }

    
}
