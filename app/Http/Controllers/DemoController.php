<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
     return Student::all();
    }
    public function delete(Request $request,$id){
        $student = Student::findOrFail($id);
        $student->delete();
         return response()->json(['message' => 'Student deleted successfully'], 200);


    }
    public function store(Request $request){
        // $student = new Student();
        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->phone = $request->phone;
        // $student->save();
        // return response()->json(['message' => 'Student created successfully'], 201);

        $student = Student::create($request->all());
        return response()->json(['message' => 'Student created successfully'], 201);
    }  
    public function studentsupdate(Request $request,$id){
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return response()->json(['message' => 'Student updated successfully'], 200);
    }

}
