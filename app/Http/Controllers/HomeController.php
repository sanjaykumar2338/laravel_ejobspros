<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $routes = Route::getRoutes();
        foreach ($routes as $route) {
            echo $route->uri.'<br>';
        }

        return view('pages.home');
    }
}
