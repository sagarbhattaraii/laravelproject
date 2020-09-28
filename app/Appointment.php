<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $table="appointment";
    protected $fillable=["pname","pemail","paddress","pcellno","pgender","adate","atime","description","status","doctor_id"];

    public function doctor(){
    	return $this->hasOne('App\Doctors','id','doctor_id');
    }
}
