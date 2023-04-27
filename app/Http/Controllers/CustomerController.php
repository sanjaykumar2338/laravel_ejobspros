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

     public function chat()
    {
        $loggedUser = User::where('id',auth()->user()->id)->get();
        $chatUsers = User::where('role','admin')->get();
        //echo "<pre>"; print_r($chatUsers); die;
        $senderUserid = '';
        $recieverUserid = '';
        $output = '';

        return view('customer.pages.chatpage')->with('loggedUser',$loggedUser)->with('chatUsers',$chatUsers)->with('output',$output);
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
        $subscription_list = \DB::table('quote_proposal')->where('quote_id',$request->id)->orderBy('id', 'DESC')->get();
        return view('customer.pages.quote-proposal')->with('subscription_list', $subscription_list);    
    }

    public function documentlist(Request $request){
        $subscription_list = \DB::table('quote_proposal_file')->where('proposal_id',$request->id)->orderBy('id', 'DESC')->get();
        return view('customer.pages.documentlist')->with('subscription_list', $subscription_list); 
    }
}