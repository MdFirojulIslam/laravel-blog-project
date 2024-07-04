<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function Home(Request $request)
    {
        return "I am from siteController homepage";
    }

    public function About(Request $request)
    {
        return "I am from about controller home page";
    }

    public function Contact(Request $request)
    {
        return "I am from about controller home page";
    }
}
