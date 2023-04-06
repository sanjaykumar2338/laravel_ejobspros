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
}