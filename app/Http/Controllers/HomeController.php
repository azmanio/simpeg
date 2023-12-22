<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(Request $request)
    {
        return view('pages.home');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $employees = Employee::where('name', 'LIKE', "%$searchTerm%")->get();

        $departments = Department::where('name', 'LIKE', "%$searchTerm%")->get();

        return view('pages.search-results', compact('employees', 'departments','searchTerm'));
    }
}