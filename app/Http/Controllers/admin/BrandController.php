<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::paginate(50);
     
        return view('adminpanel.brand.show')->with('brand',$brand);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brandName' => 'required',
            'brandName_ar' => 'required',
         ]);
         $brand = Brand::create([
            'BrandName' => $request->brandName,
            'brand_ar' => $request->brandName_ar
         ]);
         
         if ($brand) {
            return redirect()->back()->with('success', 'Success! Brand Created');
         }
        else {
            return redirect()->back()->with('failed', 'Failed! Brand not Created');
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
        $brand = Brand::find($id);
        return view('adminpanel.brand.edit')->with('brand',$brand);
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
        $brand = Brand::find($id);
        $request->validate([
            'brandName' => 'required',
            'brandName_ar' => 'required',
         ]);
         $brand->update([
            'BrandName' => $request->brandName,
            'brand_ar' => $request->brandName_ar
         ]);
         if ($brand) {
            return redirect()->back()->with('success', 'Success! Brand Updated');
         }
        else {
            return redirect()->back()->with('failed', 'Failed! Brand not Updated');
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
        $brand = Brand::find($id);
        $brand->delete();
        $status = true;
        if ($status == true ) {
           return redirect()->back()->with('success', 'Success! Brand Deleted');
        }
       else {
           return redirect()->back()->with('failed', 'Failed! Brand not Updated');
        }
    }
}
