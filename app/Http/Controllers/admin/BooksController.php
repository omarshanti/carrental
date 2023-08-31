<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index() {

        $book = Book::with('user','cars')->paginate(50);
        // dd($book);
        return view('adminpanel.Book.book')->with('book',$book);

    }

    public function check($id,$status) {
       $book = Book::find($id);
        if($status == 1) {
            $book->update([
                'Status' => 1
            ]);
            $note = 1;
        }

        if($status == 2) {
            $book->update([
                'Status' => 2
            ]);
          $note = 2;  
        }

        if ($note == 1 ) {
            return redirect()->back()->with('success', 'Success! Book Confirmed');
         }
        elseif ($note == 2 ) {
            return redirect()->back()->with('failed', 'Success! Book Canceled');
         }
    }
}
