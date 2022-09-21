<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::paginate(20);
        return view('about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(10000, 99999);
            $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);

            About::create([
                'title' => $request->title,
                'body' => strip_tags($request->body),
//                'tag' => $request->tag,
                'number' => $request->number,
                'image' => $image_file_path
            ]);
        } else {
            About::create([
                'title' => $request->title,
                'body' => strip_tags($request->body),
//                'tag' => $request->tag,
                'number' => $request->number
            ]);
        }

        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $about->update(['is_active' => !$about->is_active]);
        return redirect()->route('about.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update_data = About::where('id', $id)
            ->first();
        return view('about.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('image_upload')) {
            $file_handler = new Images();
            $current_time = Carbon::now()->toDateTimeString();
            $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(10000, 99999);
            $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);

            $about = [
                'title' => $request->title,
                'body' => strip_tags($request->body),
//                'tag' => $request->tag,
                'number' => $request->number,
                'image' => $image_file_path
            ];
        } else {
            $about = [
                'title' => $request->title,
                'body' => strip_tags($request->body),
//                'tag' => $request->tag,
                'number' => $request->number
            ];
        }

        $about_details_update = About::find($id)
            ->update($about);

        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::where('id', $id)
            ->delete();
        return redirect()->route('about.index');
    }
}
