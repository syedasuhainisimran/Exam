<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;



class StudentController extends Controller
{
    public function index()
    {
      return view('parts.app');
    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return "ok";
    }
}
