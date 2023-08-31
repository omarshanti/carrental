<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index() {

        $test = Testimonial::with('user')->paginate(50);
        // dd($test);
        return view('adminpanel.Testimonials.test')->with('test',$test);

    }

    public function check($id,$status) {
       $test = Testimonial::find($id);
        if($status == 1) {
            $test->update([
                'status' => 1
            ]);
            $note = 1;
        }

        if($status == 0) {
            $test->update([
                'status' => 0
            ]);
          $note = 0;  
        }

        if ($note == 1 ) {
            return redirect()->back()->with('success', 'Success! Testimonials Activeted');
         }
        elseif ($note == 0 ) {
            return redirect()->back()->with('failed', 'Success! Testimonials is no Activeted');
         }
    }
}
