<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctors;
use App\Appointment;

class DoctorController extends Controller
{
    //
     public function index(){
    	$data=Doctors::paginate(5);
    	return view('dashboard.doctor.index',compact('data'));
    }

    public function create() {
        $data=Doctors::get();
    	return view('dashboard.doctor.create',compact('data'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'cellno'=>'required|min:10'

            ]);
        Doctors::create([
                'dname'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'cellno'=>$request->cellno,
                'gender'=>$request->gender,
                'qualification'=>$request->qualification
            ]);
        $message="Doctor Added";
        return redirect()->route('admin.doctor')->with('status',$message);
    }

    public function edit($id) {
        $data=Doctors::find($id);
        
        return view('dashboard.doctor.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'pcellno'=>'required|min:10'

            ]);
        
        $data=Doctors::find($id)->update([
                'dname'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'cellno'=>$request->cellno,
                'gender'=>$request->gender,
                'qualification'=>$request->qualification
            ]);
        //
        // $data = ProductCategory::where('id')
        $message="Doctor Details Updated";
        return redirect()->route('admin.doctor')->with('status',$message);
    }

    public function destroy(Request $request,$id){
       $message="Doctor is in use";
        if(!Appointment::where('doctor_id',$id)->exists()){
            $data=Doctors::find($id)->delete();
            $message="Successfully deleted";

        }
        return redirect()->route('admin.doctor')->with('status',$message);
    }
}
