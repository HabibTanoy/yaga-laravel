<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\Slider;
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
        $this->middleware('auth');
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
    public function sliderUpload(Request $request)
    {
        $file_handler = new Images();
        $file_name = rand(10000,99999);
        $image_file_path = $file_handler->uploadFile($request->file('slider_upload'),$file_name);
       $slider_upload = Slider::create([
           'images' => $image_file_path
       ]);
       return redirect()->route('slider-view');
    }
    public function fronted()
    {
        $images = Slider::get();
        return view('fronted.home');
    }
}
