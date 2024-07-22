<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

use App\Models\Review;

class DelightcelaoController extends Controller
{
    public  function index(){
        return view('Delightcelao.index');
    }

    public function booking(){
        return view('delightcelao.booking');
    }

    public function menus(){
        return view('delightcelao.menus');
    }

    public function review(){
        return view('delightcelao.review');
    }

    public function admin(){
        $bookingdetails = Booking::all();
        return view('delightcelao.admin',['delightcelao.admin' => $bookingdetails ]);
       
    }

    public function store(Request $request){
        $data = $request->validate([
            'B_Name' => 'required|string',
            'B_Email' => 'required|email',
            'B_Mobile' => 'required|numeric',
            'B_Date' => 'required|date',
            'B_Meal' => 'required',
            'B_People' => 'required',
            'B_Table_No' => 'required|array',
        ]);

        $newBooking = Booking::create($data);

        return redirect(route('delightcelao.booking'));
    }

    public function rstore(Request $request){
        $data = $request->validate([
         'Re_name'=>'required|string',
         'Re_content'=>'required',

        ]);

        $newReview = $Review::create($data);
        return redirect(route('delightcelao.review'));

    }

}
