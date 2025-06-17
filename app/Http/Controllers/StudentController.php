<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // dd(Student::all());
        $students = Student::all();
        return view('student.list',compact('students'));
    }

    public function show($id)
    {
        return "List student with id:" . $id;
    }
}
