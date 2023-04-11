<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Appointment;
use App\Models\Contactus;
use App\Models\Plan;
use App\Models\User;
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
        $quote = Quote::where('email',auth()->user()->email)->orwhere('user_id',auth()->user()->id)->get();
        return view('customer.pages.my-request')->with('quote',$quote);
    }

    public function subscription_list()
    {
        //echo auth()->user()->id;
        $subscription_list = \DB::table('subscriptions')->where('user_id',auth()->user()->id)->get();
        return view('customer.pages.subscription-list')->with('subscription_list',$subscription_list);
    }

    public function quote_proposal(Request $request){
        $subscription_list = \DB::table('quote_proposal')->where('quote_id',$request->id)->paginate(10);
        return view('customer.pages.quote-proposal')->with('subscription_list', $subscription_list);    
    }
}