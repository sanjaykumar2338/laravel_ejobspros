<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Appointment;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Auth;

class AdminMainController extends Controller
{

    public function index()
    {
        return view('pages.quote');
    }
}