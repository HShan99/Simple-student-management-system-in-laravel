<?php
namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Studentcontroller extends Controller
{
    public function index(){
        $students = student::all();
        return view('student.index',compact('students'));
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $request){

        $rules=[
            'first_name'=> 'required|string',
            'address'=> 'required|string'
        ];

        $validator = Validator::make($request->all(),$rules,$messages=[
            'first_name.required'=> 'Please Enter your First Name',
            'address.required'=> 'Please Enter your Address'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

         $student = new student;
         $student->first_name = $request->first_name;
         $student->last_name = $request->last_name;
         $student->contact_No = $request->contact_No;
         $student->address = $request->address;
         $student->Bday = $request->Bday;
         $student->save();

        return redirect()->back();
        // this method is easy to catch the all data.but defined the all like that
        // protected $fillable = [
        //     'first_name','last_name','contact_No','address','Bday'
        // ];
        // $student = student::create($request->all());
        // return("success");

    }

    public function edit($id){
        $student= student::where('id',$id)->first();
        return view('student.edit',compact('student'));
        // return $student = student::where('id',$i);
    }

    public function update(Request $request,$student_id){
        $rules=[
            'first_name'=> 'required|string',
            'address'=> 'required|string'
        ];

        $validator = Validator::make($request->all(),$rules,$messages=[
            'first_name.required'=> 'Please Enter your First Name',
            'address.required'=> 'Please Enter your Address'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }



        $student=student::where('id', $student_id)->first();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->contact_No = $request->contact_No;
        $student->address = $request->address;
        $student->Bday = $request->Bday;
        $student->save();
        return redirect()->route('student_index');
    }


    public function delete($student_id){
        $student = student::where('id',$student_id)->delete();
        return redirect()->route('student_index');

    }

}
