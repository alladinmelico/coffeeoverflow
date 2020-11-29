<?php

namespace App\Http\Controllers;

use App\Models\StudentSchoolworks;
use Illuminate\Http\Request;

class StudentSchoolworksController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file|mimes:pdf|max:10240',
            'schoolwork_id' => 'required',
            'course_student_id' => 'required',
        ]);

        $submission = new StudentSchoolworks();
        $submission->schoolwork_id = $validatedData['schoolwork_id'];
        $submission->course_student_id = $validatedData['course_student_id'];
        $media = $submission->addMedia($validatedData['file'])->toMediaCollection('submission');
        $submission->save();

        $submission->media_id = $media->id;
        $submission->save();
        return redirect()->route('course.show',$validatedData['schoolwork_id'])->with('success', 'Class created successfully.');
    }

    public function show(StudentSchoolworks $studentSchoolwork)
    {
        return view('submission.show', compact('studentSchoolwork'));
    }

    public function edit(StudentSchoolworks $studentSchoolworks)
    {
        //
    }

    public function update(Request $request, StudentSchoolworks $studentSchoolworks)
    {
        //
    }

    public function destroy(StudentSchoolworks $studentSchoolworks)
    {
        //
    }
}