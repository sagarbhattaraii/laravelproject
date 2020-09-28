<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    //
    protected $table="doctors";
    protected $fillable=["dname","email","address", "cellno","gender","qualification"];

    
}
