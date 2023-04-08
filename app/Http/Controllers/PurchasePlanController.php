<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Appointment;
use App\Models\Contactus;
use App\Models\Plan;
use Illuminate\Http\Request;
use Auth;
use Stripe;
use Session;
use Exception;

class PurchasePlanController extends Controller
{
    public function purchase_plan(Request $request)
    {   
        $plan = Plan::find($request->id);
        if($plan){                        
            return view('stripe.checkout')->with('plan',$plan);   
        }

        return abort(404);
    }

    public function order_post(Request $request)
    {
        $user = auth()->user();
        $input = $request->all();
        $token =  $request->stripeToken;
        $paymentMethod = $request->paymentMethod;
        try {

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            
            if (is_null($user->stripe_id)) {
                $stripeCustomer = $user->createAsStripeCustomer();
            }

            \Stripe\Customer::createSource(
                $user->stripe_id,
                ['source' => $token]
            );

            $user->newSubscription('test',$input['plane'])
                ->create($paymentMethod, [
                'email' => $user->email,
            ]);

            return back()->with('success','Subscription is completed.');
        } catch (Exception $e) {
            return back()->with('success',$e->getMessage());
        }   
    }
}