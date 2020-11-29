<?php

namespace App\Http\Controllers;

use App\Models\schoolworks;
use App\Models\StudentSchoolworks;
use App\Models\CourseStudents;
use Illuminate\Http\Request;

class SchoolworksController extends Controller
{
    public function index()
    {
        $schoolworks = CourseStudents::with('course')->where('student_id', '=', auth()->user()->id)->orderBy('updated_at','DESC')->orderBy('updated_at','DESC')->paginate(10);
        // dd($schoolworks);
        return view('schoolwork.index',compact('schoolworks'));
    }

    public function create()
    {
        $course = request('course');
        $type = ['Assignment'=>'Assignment','Announcement'=>'Announcement', 'Material'=>'Material' ];
        return view('schoolwork.create',compact('type','course'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required|min:5',
            'items' => 'required|numeric',
            'course_id' => 'required',
            'type' => 'required|in:Assignment,Announcement,Material'
        ]);

        schoolworks::create($validatedData);

        return redirect()->route('course.show', $validatedData['course_id'])->with('success', $request->input('type').' posted successfully.');
    }

    public function show(schoolworks $schoolwork)
    {
        $submission = StudentSchoolworks::where([['schoolwork_id','=',$schoolwork->id],['course_student_id','=', auth()->user()->id]])->first();
        $isTeacher = ($schoolwork->course->teacher_id == auth()->user()->id) ? true:false;
        $media = null;
        if($submission && ($submission['media_id'] != null)){
            $media = $submission->submissionUrl;
        }
        return view('schoolwork.show',compact('schoolwork','submission','isTeacher','media'));
    }

    public function edit(schoolworks $schoolwork)
    {
        if(auth()->user()->id != $schoolwork->course->teacher_id){
            return redirect('/schoolwork');
        }
        $type = ['Assignment'=>'Assignment','Announcement'=>'Announcement', 'Material'=>'Material' ];
        $course = $schoolwork->course->id;
        return view('schoolwork.edit',compact('schoolwork','type','course'));
    }

    public function update(Request $request, schoolworks $schoolworks)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:5',
            'items' => 'required|numeric',
            'course_id' => 'required',
            'type' => 'required|in:Assignment,Announcement,Material'
        ]);
        $schoolworks->update($request->all());

        return redirect()->route('schoolwork.index')
        ->with('success', $request->input('type').' edited successfully.');
    }

    public function destroy(schoolworks $schoolworks)
    {
        $course->delete();
        return redirect()->route('schoolwork.index')
        ->with('success','Course Deleted successfully');
    }
}