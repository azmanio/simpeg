<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Department::all();
        return view('pages.admin.departments.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        Department::create($request->all());
        return redirect()->route('departments.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('pages.admin.departments.update', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        $department->update($request->all());
        return redirect()->route('departments.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')->with('success','Data Berhasil Dihapus');
    }
}