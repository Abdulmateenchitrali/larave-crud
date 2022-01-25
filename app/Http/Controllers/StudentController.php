<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Student;

class StudentController extends Controller
{
    public function view(){
        $stdData=Student::latest()->simplePaginate(5);
        // ddd($stdData);

        return view('students.index',[
            'data'=>$stdData
        ]);
        
    }
    public function insert(){
        return view('students.insert');
    }
    
    public function store(Request $request){
        $std=new Student;
        $std->stdName=$request->name;
        $std->stdAddres=$request->address;
        $std->save();
        session()->flash('status', 'Student Data Has Been inserted');
        return redirect('/');
    }
}
