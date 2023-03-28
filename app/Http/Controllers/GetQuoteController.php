<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Auth;

class GetQuoteController extends Controller
{

    public function index()
    {
        return view('pages.quote');
    }

    public function pay_per_performance()
    {
        return view('pages.pay-per-performance');
    }

    public function branding()
    {
        return view('pages.branding');
    }

    public function web_design()
    {
        return view('pages.web-design');
    }

    public function digital_solutions()
    {
        return view('pages.digital-solution');
    }

    public function social_e_commerce()
    {
        return view('pages.social-e-commerce');
    }

    public function post_quote(Request $request)
    {   
        try{
            $validated = $request->validate([
                'your_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'contact_number' => '',
                'website_url' => ''
            ]);

            $quote = New Quote;
            $quote->first_name = $request->your_name;
            $quote->last_name = $request->last_name;
            $quote->email = $request->email;
            $quote->phone_number = $request->contact_number;
            $quote->website_url = $request->website_url;
            $quote->user_id = Auth::id();

            if($request->category){
                $quote->category = $request->category;
            }

            if($request->sub_category){
                $quote->sub_category = $request->sub_category;
            }

            if($quote->save()){
                return redirect()->back()->with('message', 'Quote Send Successfully!');   
            }

            return redirect()->back()->with('message', 'there is an error, try again!');   
        }catch(\Exceptions $e){
            return redirect()->back()->with('message', $e->getMessage());   
        }   
    }
}
