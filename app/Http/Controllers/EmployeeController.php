<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employee::all();
        return view('pages.admin.employees.index', compact('data') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = Department::all();
        return view('pages.admin.employees.create', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'salary' => 'required|numeric',
            'department_id' => 'required|exists:departments,id'
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $department = Department::all();
        return view('pages.admin.employees.update', compact('employee','department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'salary' => 'required|numeric',
            'department_id' => 'required|exists:departments,id'
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success','Data Berhasil Dihapus');
    }

    public function status(Employee $employee)
    {
        $employee->status = !$employee->status;

        $employee->save();
        return redirect()->route('employees.index');
    }
}