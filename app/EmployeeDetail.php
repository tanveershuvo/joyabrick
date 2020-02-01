<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeDetail extends Model
{
    protected $table = 'employee_details';
    use SoftDeletes;
    public $timestamps=false;

//Data show & insert & Edit
    protected $fillable = [
        'id','name','email','phone','designation','salary','address'
    ];
}
