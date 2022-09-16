<?php

namespace App\Http\Controllers;

use App\ImageUploads\Images;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(20);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_handler = new Images();
        $current_time = Carbon::now()->toDateTimeString();
        $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(10000, 99999);
        $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);

        Employee::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $image_file_path
        ]);
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $employee->update(['is_active' => !$employee->is_active]);
        return redirect()->route('employee.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update_data = Employee::where('id', $id)
            ->first();
        return view('employee.update_table', compact('update_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file_handler = new Images();
        $current_time = Carbon::now()->toDateTimeString();
        $file_name = str_replace(array(':', ' ', '-'), '_', $current_time) . '_' .rand(10000, 99999);
        $image_file_path = $file_handler->uploadFile($request->file('image_upload'), $file_name);

        $employee_update =[
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $image_file_path
        ];
        $employee_update_data = Employee::find($id)
            ->update($employee_update);
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::where('id', $id)
            ->delete();
        return redirect()->route('employee.index');
    }
}
