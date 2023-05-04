<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index()
    {
        $post = Route::getRoutes();
        return response()->view('sitemap.index', [
            'post' => $post,
        ])->header('Content-Type', 'text/xml');
    }

    public function webhook_stripe(Request $request){
        $payload = $request->all();
        $event = null;
        

        try {
            $event = \Stripe\Event::constructFrom($payload);
        } catch (\UnexpectedValueException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

        // Handle the subscription updated event
        if ($event->type === 'invoice.paid') {
            $subscription = $event->data->object;
            $subscription_id = $subscription->subscription->id;

            $subscription_obj = Subscription::where('stripe_id',$subscription_id)->first();
            $subscription_obj->stripe_status = 'active';
            $subscription_obj->sub_start_at = date('Y-m-d H:i:s',$subscription->period_start);
            $subscription_obj->sub_end_at = date('Y-m-d H:i:s',$subscription->period_end);
            $subscription_obj->save();
        }

        return response()->json(['success' => true]);
    }
}