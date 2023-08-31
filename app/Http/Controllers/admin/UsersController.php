<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function users()
    {
        $data = User::Paginate(50);
        return view('adminpanel.user.users')->with('data', $data);
    }

    public function actionUsers($id, $status)
    {
        $del = User::find($id);
        if ($status == 2) {
            if ($del->id == 1) {
                return redirect()->back()->with("failed", "Sorry! You Can't Delete Owner Admin");
            } else {

                if ($del->id == Auth::user()->id) {
                    return redirect()->back()->with("failed", "Sorry! You Can't Delete Your Account");
                } else {
                    $delete = $del->delete();

                    if ($delete) {
                        return redirect()->back()->with('success', 'Success! User Has Deleted');
                    } else {
                        return redirect()->back()->with('failed', 'Failed! Error In Delete User');
                    }
                }
            }
        } else {
            if ($status == 0) {

                if ($del->id == 1) {
                    return redirect()->back()->with("failed", "Sorry! You Can't Change Owner Admin To User");
                } else {
                    if ($del->auth == "'USR'") {
                        return redirect()->back()->with("failed", "Sorry! This User Is User Alrady");
                    } else {

                        $user = $del->update([
                            'auth' => "'USR'"
                        ]);

                        if ($user) {
                            return redirect()->back()->with('success', 'Success! Admin Changed To User');
                        } else {
                            return redirect()->back()->with('failed', 'Failed! Error In Change Admin To User');
                        }
                    }
                }
         } else {

            if ($status == 1) {
                if ($del->auth === "'ADM'") {
                    return redirect()->back()->with("failed", "Sorry! This User Is Admin Alrady");
                } else {
        
                    $admin = $del->update([
                        'auth' => "'ADM'"
                    ]);
        
                    if ($admin) {
                        return redirect()->back()->with('success', 'Success! User Changed To Admin');
                    } else {
                        return redirect()->back()->with('failed', 'Failed! Error In Change User To Admin');
                    }
                }
                
        
                
                                  }
         }
        }
    }
}
