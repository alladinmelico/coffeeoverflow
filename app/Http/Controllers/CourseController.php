<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use App\Models\CourseStudents;
use App\Models\SchoolWorks;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = CourseStudents::with('course')->where('student_id', '=', auth()->user()->id)->orderBy('updated_at','DESC')->orderBy('updated_at','DESC')->paginate(10);
        $personalCourses = Course::with('studentClasses','subject')->where('teacher_id', '=', auth()->user()->id)->orderBy('updated_at','DESC')->paginate(10);
        return view('course.index',compact('courses','personalCourses'));
    }

    public function create()
    {
        $subjects = Subject::all()->mapWithKeys(function($subject) {
            return[$subject['id']=>$subject['name']];
        });
        return view('course.create',compact('subjects'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required|min:5',
            'code' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required'
        ]);

        Course::create($validatedData);

        return redirect('/course')->with('success', 'Class created successfully.');
    }

    public function show(Course $course)
    {
        $works = SchoolWorks::where('course_id','=',$course->id)->get();
        return view('course.show',compact('course','works'));
    }

    public function edit(Course $course)
    {
        if(auth()->user()->id != $course->teacher_id){
            return redirect('course');
        }
        $subjects = Subject::all()->mapWithKeys(function($subject) {
            return[$subject['id']=>$subject['name']];
        });
        return view('course.edit',compact('course','subjects'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|min:5',
            'code' => 'required',
            'subject_id' => 'required',
            'teacher_id' => 'required'
        ]);
        $course->update($request->all());

        return redirect()->route('course.index')
        ->with('success','Course edited successfully');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')
        ->with('success','Course Deleted successfully');
    }

    public function enroll(Request $request){
        $validatedData = $request->validate([
            'code' => 'required|exists:courses,code',
        ]);

        $course = Course::where('code', '=', $validatedData['code'])->first();
        $courseStudent = new CourseStudents();
        $courseStudent->course_id = $course->id;
        $courseStudent->student_id = auth()->user()->id;
        $courseStudent->save();

        return redirect()->route('course.index')
        ->with('success','You enrolled successfully');
    }
}