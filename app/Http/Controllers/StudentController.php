<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        dump('Student Delete '.route('students.destroy',['student'=>1]));
        dump('Student Show '.route('students.show',['student'=>1]));
        dump('Student Update '.route('students.update',['student'=>1]));
        dump('Student Edit '.route('students.edit',['student'=>1]));
        dump('Student store '.route('students.store'));
        dd('Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        dd('Show');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        dd('edit');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
