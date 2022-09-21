<?php

namespace App\Http\Controllers;

//use App\ImageUploads\Images;
use App\Models\About;
use App\Models\ClientFeedback;
use App\Models\EmailFeedback;
use App\Models\Employee;
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
        parent::__construct();
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
        $employees = Employee::where('is_active', '=', 1)
            ->get();
        $client_feedbacks = ClientFeedback::where('is_active', '=', 1)
            ->get();
        $abouts = About::get();
        foreach ($abouts as $about) {
            $title = $about->title;
            $body = $about->body;
            $number = $about->number;
            $about_image = $about->image;
        }

        return view('frontend.index', compact('images', 'services', 'employees', 'client_feedbacks', 'title', 'body', 'number', 'about_image'));
    }
    public function email_feedback(Request $request)
    {
        EmailFeedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        return redirect()->route('frontend');
    }
}
