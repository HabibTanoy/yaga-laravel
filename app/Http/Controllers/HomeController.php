<?php

namespace App\Http\Controllers;

//use App\ImageUploads\Images;
use App\Models\EmailFeedback;
use App\Models\Service;
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
        $images = Slider::active()->get();
        $services = Service::where('is_active', '=', 1)
            ->get();
        return view('frontend.home', compact('images', 'services'));
    }
    public function email_feedback(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $email_feedback_data_store = EmailFeedback::create([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
        return view('frontend.home');
    }
}
