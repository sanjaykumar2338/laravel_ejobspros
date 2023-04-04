<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $post = User::orderBy('updated_at', 'desc')->first();
        return response()->view('sitemap.index', [
            'post' => $post,
        ])->header('Content-Type', 'text/xml');
    }
}