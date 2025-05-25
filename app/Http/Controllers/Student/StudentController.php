<?php

namespace App\Http\Controllers\Student;

use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
    public function dashboard()
    {
        $complaints = Complaint::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();
        $resolved = $complaints->where('status', 'resolved')->count();
        return view('student.dashboard', compact('complaints', 'resolved'));
    }

    public function feedback()
    {
        return view('student.feedback');
    }

    public function help()
    {
        return view('student.help');
    }

    public function compaints()
    {
        $complaints = Complaint::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('student.complaints', compact('complaints'));
    }

    public function profile()
    {
        return view('student.profile');
    }

    public function log()
    {
        return view('student.log');
    }
}
