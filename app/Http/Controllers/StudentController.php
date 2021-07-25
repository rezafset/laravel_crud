<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('main_content.front_page');
    }
    public function add_student(){
        return view('main_content.add_student');
    }
    public function edit_student(){
        return view('main_content.edit_student');
    }
}
