<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Appointment;
use App\Models\Contactus;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Query;
use App\Mail\CustomerQuote;
use App\Mail\QuoteReply;
use App\Mail\Thankyou;
use App\Mail\AdminMessage;
use App\Mail\Contactus as ContactsMail;
use ReCaptcha\ReCaptcha;

class GetQuoteController extends Controller
{

    public function index()
    {
        return view('pages.quote');
    }

    public function proposal()
    {
        return view('pages.proposal');
    }

    public function contact_us(){
        return view('pages.contactus');
    }

    public function portfolio(){
        return view('pages.portfolio');
    }

    public function  industries(){
        return view('pages.industries');
    }

    public function privacy_policy(){
        return view('pages.privacy-policy');   
    }

    public function coupon(){
        return view('pages.coupon');
    }

    public function terms_of_use(){
        return view('pages.terms-of-use');
    }

    public function appointment()
    {
        return view('pages.appointment');
    }

    public function pay_per_performance()
    {
        return view('pages.pay-per-performance');
    }

    public function website(){
        return view('pages.web-design.website');
    }

    public function success_essentials()
    {
        return view('pages.digital_solutions_menu.success-essentials');
    }

    public function local_marketing(){
        return view('pages.digital_solutions_menu.local-marketing');
    }

    public function content_marketing(){
        return view('pages.digital_solutions_menu.content-marketing');
    }

    public function search_engine_optimization_seo(){
        return view('pages.digital_solutions_menu.sem');
    }

    public function search_engine_optimization_seo2(){
        return view('pages.web-design.search-engine-optimization-seo');
    }

    public function video_marketing(){
        return view('pages.web-design.video-marketing');
    }

    public function search_media_marketing_smm(){
        return view('pages.digital_solutions_menu.smm');
    }

    public function social_ecommerce()
    {
        return view('pages.digital_solutions_menu.social-e-commerce');
    }

    public function pay_per_performance2(){
        return view('pages.digital_solutions_menu.pay-per-performance');
    }

    public function pay_per_lead(){
        return view('pages.digital_solutions_menu.pay-per-lead');
    }

    public function branding()
    {
        return view('pages.branding');
    }

    public function maintenance()
    {
        return view('pages.digital_solutions_menu.maintenance');
    }

    public function website_audit()
    {
        return view('pages.resources_menu.free_website_audit');
    }

    public function competitor_analysis(){
        return view('pages.resources_menu.competitor_analysis');
    }

    public function website_speed(){
        return view('pages.resources_menu.website_speed');
    }

    public function branding2()
    {
        return view('pages.digital_solutions_menu.branding');
    }

    public function digital_marketing_professionals()
    {
        return view('pages.digital_solutions_menu.digital-marketing-professionals');
    }

    public function paid_search_advertising(){
        return view('pages.web-design.paid-search-advertising');
    }

    public function seo_resources()
    {
        return view('pages.seo-resources');
    }

    public function free_consultation()
    {
        return view('pages.free-consultation');
    }

    public function digital_marketing()
    {
        return view('pages.digital-marketing');
    }

    public function web_design()
    {
        return view('pages.web-design');
    }

    public function email_marketing(){
        return view('pages.web-design.email-marketing');
    }

    public function mobile_marketing(){
        return view('pages.web-design.mobile-marketing');
    }

    public function landing_page(){
        return view('pages.web-design.landing-page');
    }

    public function social_shop(){
        return view('pages.web-design.social-shop');
    }

    public function marketing_automation(){
        return view('pages.web-design.marketing-automation');
    }

    public function campaign_design(){
        return view('pages.web-design.campaign-design');
    }

    public function e_catalog_inventory(){
        return view('pages.web-design.e-catalog-inventory');
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

        //print_r($request->all()); die;
        // Verify reCAPTCHA response
        $recaptcha = new ReCaptcha(env('RECAPTCHA_SECRET_KEY'));
        $response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

        if (!$response->isSuccess()) {
            // reCAPTCHA validation failed, handle the error
            return redirect()->back()->with('message', 'reCAPTCHA validation failed.');
        }

        
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
                $contactus_email = new \stdClass();
                $contactus_email->email = 'contact@ejobs4pros.com';
                Mail::to($contactus_email)->send(new Query($quote));

                $contactus_email->email = 'dev@ejobs4pros.com';
                Mail::to($contactus_email)->send(new Query($quote));

                $contactus_email->email = 'gabriel@ejobs4pros.com';
                Mail::to($contactus_email)->send(new Query($quote));

                $contactus_email->email = 'ejobspros@gmail.com';
                Mail::to($contactus_email)->send(new Query($quote));               

                $user = User::where('role','admin')->first();
                Mail::to($user)->send(new Query($quote));
                $rec = User::where('email',$request->email)->count();

                if($rec == 0){
                    $password = rand();
                    $new_user = New User;
                    $new_user->name = $request->your_name.' '.$request->last_name;
                    $new_user->email = $request->email;
                    $new_user->password = \Hash::make($password);
                    $new_user->role = 'customer';
                    $new_user->save();
                    Mail::to($new_user)->send(new CustomerQuote($quote,$new_user,true,$password));
                }else{
                    $rec = User::where('email',$request->email)->first();
                    Mail::to($rec)->send(new CustomerQuote($quote,$rec,false,''));
                }

                return redirect()->back()->with('message', 'Quote Send Successfully!');   
            }

            return redirect()->back()->with('message', 'there is an error, try again!');   
        }catch(\Exceptions $e){
            return redirect()->back()->with('message', $e->getMessage());   
        }   
    }

    public function post_appointment(Request $request)
    {   

        //print_r($request->all()); die;
        // Verify reCAPTCHA response
        $recaptcha = new ReCaptcha(env('RECAPTCHA_SECRET_KEY'));
        $response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

        if (!$response->isSuccess()) {
            // reCAPTCHA validation failed, handle the error
            return redirect()->back()->with('message', 'reCAPTCHA validation failed.');
        }

        //print_r($request->all()); die;
        try{
            $validated = $request->validate([
                'your_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'contact_number' => '',
                'website_url' => '',
                'date' => 'required',
                'time' => 'required',
                'place' => ''
            ]);

            $objt = New Appointment;
            $objt->first_name = $request->your_name;
            $objt->last_name = $request->last_name;
            $objt->email = $request->email;
            $objt->phone_number = $request->contact_number;
            $objt->website_url = $request->website_url;
            $objt->time = $request->time;
            $objt->date = $request->date;
            $objt->place = $request->place;
            $objt->user_id = Auth::id();

            if($objt->save()){
                $user = User::where('role','admin')->first();
                $type='Appointment';

                $contactus_email = new \stdClass();
                $contactus_email->email = 'contact@ejobs4pros.com';
                Mail::to($contactus_email)->send(new AdminMessage($objt,$type,$objt));

                $contactus_email->email = 'dev@ejobs4pros.com';
                Mail::to($contactus_email)->send(new AdminMessage($objt,$type,$objt));

                $contactus_email->email = 'gabriel@ejobs4pros.com';
                Mail::to($contactus_email)->send(new AdminMessage($objt,$type,$objt));

                $contactus_email->email = 'ejobspros@gmail.com';
                Mail::to($contactus_email)->send(new AdminMessage($objt,$type,$objt)); 
              
                Mail::to($user)->send(new AdminMessage($objt,$type,$objt));
                Mail::to($objt)->send(new Thankyou($objt,$type));
                
                return redirect()->back()->with('message', 'Appointment Schedule Successfully!');   
            }

            return redirect()->back()->with('message', 'there is an error, try again!');   
        }catch(\Exceptions $e){
            return redirect()->back()->with('message', $e->getMessage());   
        }   
    }

    public function contact_us_save(Request $request)
    {   
        //print_r($request->all()); die;
        // Verify reCAPTCHA response
        $recaptcha = new ReCaptcha(env('RECAPTCHA_SECRET_KEY'));
        $response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

        if (!$response->isSuccess()) {
            // reCAPTCHA validation failed, handle the error
            return redirect()->back()->with('message', 'reCAPTCHA validation failed.');
        }


        try{
            $validated = $request->validate([
                'name' => 'required|min:5|max:255',
                'email' => 'required|min:5|max:255|email',
                'phone_number' => '',
                'website_url' => ''
            ]);

            $objt = New Contactus;
            $objt->name = $request->name;
            $objt->email = $request->email;
            $objt->phone_number = $request->phone_number;
            $objt->website_url = $request->website_url;
            $objt->user_id = Auth::id();

            if($objt->save()){
                $user = User::where('role','admin')->first();
                $type='contactus';

                $contactus_email = new \stdClass();
                $contactus_email->email = 'contact@ejobs4pros.com';
                Mail::to($contactus_email)->send(new ContactsMail($objt));

                $contactus_email->email = 'dev@ejobs4pros.com';
                Mail::to($contactus_email)->send(new ContactsMail($objt));

                $contactus_email->email = 'gabriel@ejobs4pros.com';
                Mail::to($contactus_email)->send(new ContactsMail($objt));

                $contactus_email->email = 'ejobspros@gmail.com';
                Mail::to($contactus_email)->send(new ContactsMail($objt)); 

                Mail::to($objt)->send(new Thankyou($objt,$type));
                Mail::to($user)->send(new ContactsMail($objt));
                
                return redirect()->back()->with('message', 'We will contact you soon, Your welcome !');   
            }

            return redirect()->back()->with('message', 'there is an error, try again!');   
        }catch(\Exceptions $e){
            return redirect()->back()->with('message', $e->getMessage());   
        }   
    }
}
