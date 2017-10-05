<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmploymentHistory
 * @package App\Models
 * @version September 10, 2017, 7:45 pm +08
 *
 * @property \App\Models\Employee employee
 * @property \Illuminate\Database\Eloquent\Collection roleHasPermissions
 * @property string name
 * @property string job_title
 * @property string industry_type
 * @property string employment_status
 * @property string reason
 * @property decimal starting_salary
 * @property decimal final_salary
 * @property date start_date
 * @property date end_date
 * @property integer employees_id
 */
class EmploymentHistory extends Model
{
    use SoftDeletes;

    public $table = 'employment_history';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'job_title',
        'industry_type',
        'employment_status',
        'reason',
        'starting_salary',
        'final_salary',
        'start_date',
        'end_date',
        'employees_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'job_title' => 'string',
        'industry_type' => 'string',
        'employment_status' => 'string',
        'reason' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'employees_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function employee()
    {
        return $this->belongsTo(\App\Models\Employee::class);
    }
}
