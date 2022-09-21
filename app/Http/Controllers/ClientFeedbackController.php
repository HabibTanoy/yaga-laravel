<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\ClientFeedback;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client_feedback = ClientFeedback::paginate(20);
        return view('client_feedback.index', compact('client_feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client_feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('slider_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(10000, 99999);
            $image_file_path = $file_handler->uploadFile($request->file('slider_upload'), $file_name);

            ClientFeedback::create([
                'client_name' => $request->name,
                'designation' => $request->designation,
                'comments' => strip_tags($request->comments),
                'image' => $image_file_path
            ]);
        } else {
            ClientFeedback::create([
                'client_name' => $request->name,
                'designation' => $request->designation,
                'comments' => strip_tags($request->comments)
            ]);
        }

        return redirect()->route('client-feedback.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientFeedback  $clientFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(ClientFeedback $clientFeedback)
    {
        $clientFeedback->update(['is_active' => !$clientFeedback->is_active]);
        return redirect()->route('client-feedback.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientFeedback  $clientFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update_data = ClientFeedback::where('id', $id)
            ->first();
        return view('client_feedback.update_table', compact('update_data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientFeedback  $clientFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('slider_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(10000, 99999);
            $image_file_path = $file_handler->uploadFile($request->file('slider_upload'), $file_name);

            $clientFeedback = [
                'client_name' => $request->name,
                'designation' => $request->designation,
                'comments' => strip_tags($request->comments),
                'image' => $image_file_path
            ];
        } else {
            $clientFeedback = [
                'client_name' => $request->name,
                'designation' => $request->designation,
                'comments' => strip_tags($request->comments),
            ];
        }

        $service_details_update = ClientFeedback::find($id)
            ->update($clientFeedback);

        return redirect()->route('client-feedback.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientFeedback  $clientFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClientFeedback::where('id', $id)
            ->delete();
        return redirect()->route('client-feedback.index');
    }
}
