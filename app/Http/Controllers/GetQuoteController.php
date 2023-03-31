<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Appointment;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Auth;

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

    public function post_appointment(Request $request)
    {   
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
        try{
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'contact_number' => '',
                'website_url' => ''
            ]);

            $objt = New Contactus;
            $objt->name = $request->name;
            $objt->email = $request->email;
            $objt->phone_number = $request->contact_number;
            $objt->website_url = $request->website_url;
            $objt->user_id = Auth::id();

            if($objt->save()){
                return redirect()->back()->with('message', 'We will contact you soon, Your welcome !');   
            }

            return redirect()->back()->with('message', 'there is an error, try again!');   
        }catch(\Exceptions $e){
            return redirect()->back()->with('message', $e->getMessage());   
        }   
    }
}
