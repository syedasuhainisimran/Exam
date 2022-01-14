<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller

{
    public function index()
    {
      return view('parts.app');
    }

    public function store(Request $request)
    {
      
        Teacher::create($request->all());
        return "ok";
    }
}

