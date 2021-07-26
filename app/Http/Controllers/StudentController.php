<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('main_content.front_page', compact('students'));
    }
    public function add_student(){
        return view('main_content.add_student');
    }
    // Edit Student Data
    public function edit_student($id){
        $student = Student::findorfail($id);
        return view('main_content.edit_student', compact('student'));
    }
    // Insert Student Data
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'batch' => 'required',
            'department' => 'required',
            'cgpa' => 'required',
        ],[
            'name.required' => 'Please enter name!!',
            'batch.required' => 'Please enter batch!!',
            'department.required' => 'Please enter department!!',
            'cgpa.required' => 'Please enter cgpa!!',
        ]);
        Student::insert([
            'name'=>$request->name,
            'batch'=>$request->batch,
            'department'=>$request->department,
            'cgpa'=>$request->cgpa,
        ]);

        return redirect()->to('/')->with('success', 'Data Inserted Successfully!!');
    }
    // Update Student Data
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'batch' => 'required',
            'department' => 'required',
            'cgpa' => 'required',
        ]);
        Student::findorfail($id)->update([
            'name'=>$request->name,
            'batch'=>$request->batch,
            'department'=>$request->department,
            'cgpa'=>$request->cgpa,
        ]);
        return redirect()->to('/')->with('update', 'Data Updated Successfully!!');
    }
    // Delete Student Data
    public function delete($id){
        Student::findorfail($id)->delete();
        return redirect()->back()->with('delete', 'Data Deleted Successfully!!');
    }
}
