<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('fronted');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function slider()
    {
        return view('slider');
    }

    public function fronted()
    {
        $images = Slider::get();
        return view('frontend.home');
    }
}
