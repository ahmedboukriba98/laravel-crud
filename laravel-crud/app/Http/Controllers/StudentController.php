<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\File;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::paginate(5);
      
        return view('students.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
  
    {
        $student=new Student;
        $student->name=$request->input('name');
        $student->phone=$request->input('phone');
        $student->password=$request->input('password');
        $student->email=$request->input('email');
        
        if($request->hasFile('image')){
            $file=$request->file('image');
            $ex = $file->getClientOriginalExtension();
            $filename=time().'.'.$ex;
          $file->move('public/images/',$filename);
          $student->image= $filename;
        }

     $student->save();


        //$student = Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
       //   $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request,$id)
  
    { 
        
      //  Student::whereId($id)->update($updateData);
 
   // $student->update($request->all());

   
    $student=Student::find($id);
    $student->name=$request->input('name');
    $student->phone=$request->input('phone');
    $student->password=$request->input('password');
    $student->email=$request->input('email');
    
    if($request->hasFile('image')){
        $destination='public/images/'.$student->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $file=$request->file('image');
        $ex = $file->getClientOriginalExtension();
        $filename=time().'.'.$ex;
      $file->move('public/images/',$filename);
      $student->image= $filename;
    }

    $student->update();
        return redirect('/students')->with('success', 'Student has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
         
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student has been deleted');
    }
}
