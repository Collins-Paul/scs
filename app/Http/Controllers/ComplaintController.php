<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('student.create-complaints');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|in:low,medium,high',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Max 2MB
        ]);

        try {
            // Prepare data for storage
            $data = [
                'title' => $validated['title'],
                'description' => $validated['description'],
                'priority' => $validated['priority'],
                'user_id' => auth()->id(), // Assuming complaints are tied to authenticated users
            ];

            // Handle file upload if present
            if ($request->hasFile('attachment')) {
                $file = $request->file('attachment');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('complaints', $fileName, 'public');
                $data['attachment_path'] = $filePath;
            }

            // Create the complaint
            Complaint::create($data);

            // Redirect with success message
            return redirect()->route('complaints')->with('success', 'Complaint submitted successfully.');

        } catch (\Exception $e) {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to submit complaint. Please try again.')->withInput();
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Complaint $complaint)
    {
        // Load relationships
        $complaint->load(['user', 'resolvedBy', 'closedBy', 'complaintsResponses.user', 'feedback.user', 'feedback.ratings.user']);
        // dd($complaint);
        return view('student.complaint-details', compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint)
    {
        //
    }
}
