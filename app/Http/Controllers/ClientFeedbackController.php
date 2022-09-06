<?php

namespace App\Http\Controllers;

use App\Models\ClientFeedback;
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
        ClientFeedback::create([
            'client_name' => $request->name,
            'designation' => $request->designation,
            'comments' => strip_tags($request->comments)
        ]);
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
        $clientFeedback = [
            'client_name' => $request->name,
            'designation' => $request->designation,
            'comments' => strip_tags($request->comments)
        ];

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
