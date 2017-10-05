<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Policy
 * @package App\Models
 * @version August 28, 2017, 9:43 am +08
 *
 * @property string name
 * @property string description
 * @property string tag
 * @property string file
 */
class Policy extends Model
{
    use SoftDeletes;

    public $table = 'policies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'tag',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'tag' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'tag' => 'required',
        'file' => 'required|mimes:jpeg,bmp,png,gif,svg,pdf|max:500000'
    ];

    
}
