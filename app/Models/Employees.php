<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employees
 * @package App\Models
 * @version September 7, 2017, 3:17 pm +08
 *
 * @property string first_name
 * @property string middle_name
 * @property string last_name
 * @property date birth_date
 * @property string birth_place
 * @property string sss
 * @property string phic
 * @property string hdmf
 * @property string bir
 * @property string tax_code
 * @property string drivers_license
 * @property integer sick_leave
 * @property integer vacation_leave
 * @property string status
 * @property string email
 * @property string civil_status
 * @property string nationality
 * @property string religion
 * @property string contact_numbers
 * @property string present_address
 * @property string permanent_address,nullable
 * @property string affiliations
 * @property string professional_license
 */
class Employees extends Model
{
    use SoftDeletes;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birth_date',
        'birth_place',
        'sss',
        'phic',
        'hdmf',
        'bir',
        'tax_code',
        'drivers_license',
        'sick_leave',
        'vacation_leave',
        'emergency_leave',
        'status',
        'email',
        'civil_status',
        'nationality',
        'religion',
        'contact_numbers',
        'present_address',
        'permanent_address',
        'affiliations',
        'professional_license',
        'emp_name',
        'emp_start_date',
        'emp_end_date',
        'emp_job_title',
        'emp_starting_salary',
        'emp_final_salary',
        'emp_reason',
        'emp_industry_type',
        'emp_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'birth_date' => 'datetime',
        'birth_place' => 'string',
        'sss' => 'string',
        'phic' => 'string',
        'hdmf' => 'string',
        'bir' => 'string',
        'tax_code' => 'string',
        'drivers_license' => 'string',
        'sick_leave' => 'integer',
        'vacation_leave' => 'integer',
        'emergency_leave' => 'integer',
        'status' => 'string',
        'email' => 'string',
        'civil_status' => 'string',
        'nationality' => 'string',
        'religion' => 'string',
        'contact_numbers' => 'string',
        'present_address' => 'string',
        'permanent_address' => 'string',
        'affiliations' => 'string',
        'professional_license' => 'string',
        'emp_name' => 'string',
        'emp_start_date' => 'date',
        'emp_end_date' => 'date',
        'emp_job_title' => 'string',
        'emp_starting_salary' => 'numeric',
        'emp_final_salary' => 'numeric',
        'emp_reason' => 'string',
        'emp_industry_type' => 'string',
        'emp_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'birth_date' => 'required',
        'birth_place' => 'required',
        'sss' => 'required',
        'phic' => 'required',
        'hdmf' => 'required',
        'bir' => 'required',
        'tax_code' => 'required',
        'status' => 'required',
        'civil_status' => 'required',
        'nationality' => 'required',
        'present_address' => 'required',
        'email' => 'required|email|unique:employees,email',

    ];

    public function employmentHistory()
    {
        return $this->hasMany(\App\Models\EmploymentHistory::class);
    }
}
