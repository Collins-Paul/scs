<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
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

    public function users()
    {
        $users = User::with('role')->get();
        return view('admin.users', ['users' => $users]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete(); // Cascades to delete role due to onDelete('cascade')
        return response()->json(['success' => true, 'message' => 'User deleted successfully']);
    }

    public function makeAdmin($id)
    {
        $user = User::findOrFail($id);
        $role = $user->role ?? new Role(['user_id' => $user->id]);
        $role->role = 'admin';
        $role->save();
        return response()->json(['success' => true, 'message' => 'User set as Admin']);
    }

    public function makeSupervisor($id)
    {
        $user = User::findOrFail($id);
        $role = $user->role ?? new Role(['user_id' => $user->id]);
        $role->role = 'supervisor';
        $role->save();
        return response()->json(['success' => true, 'message' => 'User set as Supervisor']);
    }
}
