<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctors;
use App\Appointment;
class AppointmentController extends Controller
{
    //
     public function index(){
        $data=Appointment::paginate(3);
        return view('dashboard.appointment.index',compact('data'));
    }
    public function create() {
        $data=Doctors::get();
        return view('dashboard.appointment.create',compact('data'));
    }

    public function store(Request $request){
        $message="Appointment Saved";

        $this->validate($request,[
            'pcellno'=>'required|min:10',
            'adate'=>'date_format:Y-m-d|after:today'

            ]);
        Appointment::create([
                'pname'=>$request->pname,
                'pemail'=>$request->pemail,
                'paddress'=>$request->paddress,
                'pcellno'=>$request->pcellno,
                'pgender'=>$request->pgender,
                'adate'=>$request->adate,
                'atime'=>$request->atime,
                'description'=>$request->description,
                'status'=>$request->status,
                'doctor_id'=>$request->doctor_id 
                ]);
        return redirect()->route('admin.appointment')->with('status',$message);
    
    }

    public function edit($id) {
        $data=Appointment::find($id);
        $doctor=Doctors::get();
        //
        // $data = ProductCategory::where('id')
        return view('dashboard.appointment.edit',compact('data','doctor'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'pcellno'=>'required|min:10',
            'adate'=>'date_format:Y-m-d|after:today'
            ]);
        $data=Appointment::find($id)->update([
                'pname'=>$request->pname,
                'pemail'=>$request->pemail,
                'paddress'=>$request->paddress,
                'pcellno'=>$request->pcellno,
                'pgender'=>$request->pgender,
                'adate'=>$request->adate,
                'atime'=>$request->atime,
                'description'=>$request->description,
                'status'=>$request->status,
                'doctor_id'=>$request->doctor_id
            ]);
        //
        // $data = ProductCategory::where('id')
        $message="Appointment Updated";
        return redirect()->route('admin.appointment')->with('status',$message);
    }

    public function destroy(Request $request,$id){
        
        Appointment::find($id)->delete();
        $message="Appointment Deleted";
        return redirect()->route('admin.appointment')->with('status',$message);
    }
}
