<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class CourseController extends Controller
{
    public $courses = [];

    public function index()
    {
        $courses = Http::get('https://classroom.googleapis.com/v1/courses',[
            'studentId' =>auth()->user()->google_id,
            'access_token'=> json_decode(auth()->user()->access_token)->access_token
        ])->json();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Http::get('https://classroom.googleapis.com/v1/courses/'.$id,[
            'access_token'=> json_decode(auth()->user()->access_token)->access_token
        ])->json();
        $coursework = Http::get('https://classroom.googleapis.com/v1/courses/'.$id.'/courseWork',[
            'access_token'=> json_decode(auth()->user()->access_token)->access_token
        ])->json();
        dd(auth()->user()->access_token);
        return view('course.show', compact('course','coursework'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}