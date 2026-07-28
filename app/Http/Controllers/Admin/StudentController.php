<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        // return "Halo kami sedang belajar laravel";
        $students = Student::all();
        $title = "Student Table";
        return view('admin.student', compact('title', 'students'));
    }
    public function simpan(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('student')->with('success', 'Student created successfully.');
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $student = Student::FindOrFail($id);
        $student->update($request->all());

        return redirect()->route('student')->with('success', 'Student update successfully');
    }
    public function hapus($id){
        $student = Student::FindOrFail($id);
        $student->delete();
        return redirect()->route('student')->with('success', 'Student deleted successfully');
    }
}
