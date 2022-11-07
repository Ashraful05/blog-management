<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function About()
    {
        return view('about');
    }
    public function Contact()
    {
        return view('contact');
    }
    public function Male()
    {
        return view('male');
    }
    public function FeMale()
    {
        return view('female');
    }
}
