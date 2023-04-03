<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Appointment;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Auth;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.pages.main');
    }

    public function my_request()
    {
        $quote = Quote::where('email',auth()->user()->email)->orwhere('user_id',auth()->user()->id)->paginate();
        return view('customer.pages.my-request')->with('quote',$quote);
    }
}