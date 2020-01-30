<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    protected $table = 'employee_details';
    public $timestamps=false;
    protected $fillable = [
        'id','name','email','phone','designation','salary','address'
    ];
}
