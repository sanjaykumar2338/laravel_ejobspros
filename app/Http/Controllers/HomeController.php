<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
}
