<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\StudentProfile;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('dashboard.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();

        return view('dashboard.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $student = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName ,
            'age' =>$request->age,
            'Subject' => $request->subject,
        ];
        $student = Student::create($student);
        $filename  = sprintf('thumbnail_%s.jpg', random_int(1,1000));
        if($request->hasFile('photo'))
        $filename = $request->file('photo')->storeAs('profile', $filename, 'public');
        else
           $filename = "profiles/dummy.jpg";

        if($student){
            $profile = new \App\Models\StudentProfile([
                'student_id'    => $student->id,
                'father_name'   => $request->fatherName,
                'city'          => $request->city,
                'photo'         => $filename,
                'phone'         => $request->phone,
            ]);
   
            $student->profile()->save($profile);
            
            return redirect()->back()->with('success', 'Student Registered Successfully'); 

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);

        return view('dashboard.show', compact('student'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('dashboard.edit',['student'=> $student]);
      
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);       
        $student->cne = $request->cne;
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->age = $request->age;
        $student->Subject = $request->subject;
        $student->save();
        
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id); 
        
        $student->delete();
        return redirect('/');
    }

    public function lists()
    {
        $students = Student::all();
        return view('dashboard.studentslist', compact('students'));
    }

    public function allStudents()
    {
        $students = Student::all();
        return view('dashboard.att', compact('students'));
    }

    public function search(Request $request)
    {
        $students = Student::where('id', 'like', '%' . $request->rollno . '%')->get();

        return view('dashboard.att', compact('students'));
        
    }
}
