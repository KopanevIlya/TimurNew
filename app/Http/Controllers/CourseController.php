<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Course;
use App\Models\Reactcourse;
use Illuminate\Http\Request;
use App\Models\Freecourse;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function base(): Response
    {


        return Inertia::render('Course/Index', [
            'courses' => Course::all()
        ]);
    }

    public function free(): Response
    {


        return Inertia::render('Course/Free', [
            'freecourses' => Freecourse::all(),
        ]);
    }

    public function react(): Response
    {

        return Inertia::render('Course/React', [
            'reactcourses' => Reactcourse::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
