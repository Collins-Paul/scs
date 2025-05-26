<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::get()->count();
        $complaints = Complaint::get()->count();
        $resolvedComplaints = Complaint::where('status', 'resolved')->get()->count();
        return view('admin.dashboard', [
            'users' => $users,
            'complaints' => $complaints,
            'resolvedComplaints' => $resolvedComplaints,
        ]);
    }
}
