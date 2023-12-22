<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $departmentCount = Department::count();
        $employeeCount = Employee::count();

        return view('pages.admin.dashboard', compact('userCount', 'departmentCount', 'employeeCount'));
    }
}