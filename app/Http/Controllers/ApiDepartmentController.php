<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiDepartment;
use App\Models\Department;
use Illuminate\Http\Request;

class ApiDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Department::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApiDepartment $request)
    {
        $validated = $request->validated();

        $newDepartment = new Department();
        $newDepartment->id = $validated['id'];
        $newDepartment->department_name = $validated['department_name'];
        $newDepartment->department_code = $validated['department_code'];
        $newDepartment->save();

        return response()->json([
            'sucess'        =>      true,
            'message'       =>      'Department successfully created.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getRes = Department::find($id);
        $getRes->delete();
        return response()->json([
            'success'       =>      true,
            'message'       =>      'Department Deleted!'
        ]);
    }
}
