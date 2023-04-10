<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Auth;

class AdminMainController extends Controller
{

    public function index()
    {
        return view('admin.pages.main');
    }

    public function all_users()
    {
        $users = User::where('email','!=','admin@gmail.com')->paginate(10);
        return view('admin.pages.users-all')->with('users', $users);
    }

    public function subscription_list(){
        $users = \DB::table('subscriptions')->join('users','users.id','=','subscriptions.user_id')->select('users.name as user_name','users.email as user_email','Subscriptions.*')->paginate(10);
        //echo "<pre>"; print_r($users); die();
        return view('admin.pages.subscription-list')->with('users', $users);   

        
    }

    public function all_quotes(){
        $users = \DB::table('quote')->paginate(10);
        return view('admin.pages.all-quotes')->with('users', $users);      
    }

    public function contactus_list(){
        $users = \DB::table('contactus')->paginate(10);
        return view('admin.pages.contactus-list')->with('users', $users);      
    }

    public function appointments_list(){
        $users = \DB::table('appointment')->paginate(10);
        return view('admin.pages.appointment-list')->with('users', $users);      
    }
}