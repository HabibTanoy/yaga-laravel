<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ClientFeedback;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Config;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendViewController extends Controller
{
    public function about()
    {
        $employees = Employee::where('is_active', '=', 1)->get();
        $abouts = About::get();
        foreach ($abouts as $about) {
            $title = $about->title;
            $body = $about->body;
            $number = $about->number;
            $image = $about->image;
        }
        return view('frontend.about', compact('employees', 'title', 'body', 'number', 'image'));
    }
    public function service()
    {
        $services = Service::where('is_active', '=', 1)
            ->get();
        $client_feedbacks = ClientFeedback::where('is_active', '=', 1)
            ->get();
        return view('frontend.service', compact('services', 'client_feedbacks'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function contact_us(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect()->route('contact');
    }
    public function feature()
    {
        return view('frontend.feature');
    }
    public function teams()
    {
        $employees = Employee::where('is_active', '=', 1)
            ->get();
        return view('frontend.teams', compact('employees'));
    }
    public function testimonial()
    {
        $client_feedbacks = ClientFeedback::where('is_active', '=', 1)
            ->get();
        return view('frontend.testimonial', compact('client_feedbacks'));
    }
    public function quote()
    {
        return view('frontend.quote');
    }
    public function get_in_touch()
    {
        $update_data = Config::where('name', 'get_touch')
            ->get();

        return view('config.get_in_touch', compact('update_data'));
    }

    public function get_in_touch_store(Request $request)
    {
        $data = $request->only('address','number','email');
        $get_data['name'] = "get_touch";
        $get_data['config'] = json_encode($data);
        $get_data['created_at'] = Carbon::now();
        $get_data['updated_at'] = Carbon::now();
        Config::update($get_data);
        return redirect()->route('get_in_touch');
    }
    public function project_complete()
    {
        return view('config.project_done');
    }
    public function project_complete_store(Request $request)
    {
        $data = $request->only('client','project','awards');
        $get_data['name'] = "project_done";
        $get_data['config'] = json_encode($data);
        $get_data['created_at'] = Carbon::now();
        $get_data['updated_at'] = Carbon::now();
        Config::update($get_data);
        return redirect()->route('project');
    }
}
