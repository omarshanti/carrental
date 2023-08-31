<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Info;
use App\Models\Subscribe;
use App\Models\Vechicle;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  /* This Function use To pass about data from database using Model About To Page Blade  */
    public function about() {
        $about = About::where('id',3)->get()->toArray();
        return view('page')
        ->with('about',$about);
   
    }

      /* This Function use To pass privacy data from database using Model About To Page Blade  */
      public function privacy() {
        $about = About::where('id',2)->get()->toArray();
        return view('privacy')->with('about',$about);
    }

      /* This Function use To pass terms of use data from database using Model About To Page Blade  */
      public function terms() {
        $about = About::where('id',1)->get()->toArray();
        return view('terms')->with('about',$about);
    }
/* This Function use To pass Contact data from database using Model Contact To contactus Blade  */
    public function contactUs() {
      $data = Contact::Paginate(5);
      return view('adminpanel.contact.contactus')->with('data',$data);
    }

        /* This Function use To pass privacy data from database using Model About To Page Blade  */
        public function data() {
          $about = About::where('id',3)->first();
          $faqs = About::where('id',11)->first();
          $privacy = About::where('id',2)->first();
          $terms = About::where('id',1)->first();
          return view('adminpanel.Info.data')
          ->with('about',$about)
          ->with('faqs',$faqs)
          ->with('privacy',$privacy)
          ->with('terms',$terms);
      }

    public function contactDelete($id) {
      $data = Contact::find($id);
      $check = $data->delete();
      if ($check ) {
        return redirect()->back()->with('success', 'Success! Contact Deleted');
     }
     else {
        return redirect()->back()->with('failed', 'Failed! Contact not Deleted');
     }
    }
    public function websiteInfo() {
      
      $data = Info::first();
      $about = About::find(3);
      return view('adminpanel.Info.info')->with('data',$data)->with('about',$about);
    }

    public function postWebsiteInfo(Request $request,$id) {
      $data = Info::find($id);
      $request->validate([
        'address' => 'required|max:250',
        'email' => 'required|email',
        'phone' => 'required|max:12|numeric',
     ]);
      $check = $data->update([
        'address' => $request->address,
        'email' => $request->email,
        'phone' => $request->phone,
      ]);
      if ($check ) {
        return redirect()->back()->with('success', 'Success! Contact Informations Updated');
     }
     else {
        return redirect()->back()->with('failed', 'Failed! Contact Informations Not Updated');
     }
    }

    public function subscribers() {
      
      $data = Subscribe::paginate(5);
      return view('adminpanel.Subscribe.subscribes')->with('data',$data);
    }

    public function deleteSubscribers($id)
    {
        $subs = Subscribe::find($id);
        $status = $subs->delete();
        if ($status) {
           return redirect()->back()->with('success', 'Success! Subscriber Deleted');
        }
       else {
           return redirect()->back()->with('failed', 'Failed! Subscriber not Deleted');
        }
    }

    public function postAboutUs(Request $request,$id) {
      $about = About::find($id);
      $request->validate([
        'detail' => 'string',
        'detail_ar' => 'string',
     ]);
      $check = $about->update([
        'detail' => $request->d_en,
        'detail_ar' => $request->d_ar,
      ]);
      if ($check ) {
        return redirect()->back()->with('success', 'Success! About Informations Updated');
     }
     else {
        return redirect()->back()->with('failed', 'Failed! About Informations Not Updated');
     }
    }

    public function postFaqs(Request $request,$id) {
      $about = About::find($id);
      $request->validate([
        'detail' => 'string',
        'detail_ar' => 'string',
     ]);
      $check = $about->update([
        'detail' => $request->d_en,
        'detail_ar' => $request->d_ar,
      ]);
      if ($check ) {
        return redirect()->back()->with('success', 'Success! FAQs Updated');
     }
     else {
        return redirect()->back()->with('failed', 'Failed!  FAQs Not Updated');
     }
    }

    public function postPrivacy(Request $request,$id) {
      $about = About::find($id);
      $request->validate([
        'detail' => 'string',
        'detail_ar' => 'string',
     ]);
      $check = $about->update([
        'detail' => $request->d_en,
        'detail_ar' => $request->d_ar,
      ]);
      if ($check ) {
        return redirect()->back()->with('success', 'Success! Privacy Updated');
     }
     else {
        return redirect()->back()->with('failed', 'Failed! Privacy Not Updated');
     }
    }

    public function postTerms(Request $request,$id) {
      $about = About::find($id);
      $request->validate([
        'detail' => 'string',
        'detail_ar' => 'string',
     ]);
      $check = $about->update([
        'detail' => $request->d_en,
        'detail_ar' => $request->d_ar,
      ]);
      if ($check ) {
        return redirect()->back()->with('success', 'Success! Terms Updated');
     }
     else {
        return redirect()->back()->with('failed', 'Failed! Terms Not Updated');
     }
    }

    public function subscribe(Request $request)
    {
     
        $request->validate([
            'subscriberemail' => 'required|email',
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


    public function postContact(Request $request) {
      
      $request->validate([
          'name' => 'required|max:100',
          'email' => 'required|email',
          'message' => 'required|string',
          'contactno' => 'required|numeric',
       ]);

      $data = Contact::create([
          'name' => $request->name,
          'message' => $request->message,
          'EmailId' => $request->email,
          'ContactNo' => $request->contactno,
      ]);

      if ($data) {
          return redirect()->back()->with('success', 'Success! Inforamtions Sent Successfully');
      }
      else {
          return redirect()->back()->with('failed', 'Failed! Error In Informations');
      }
  }

}
