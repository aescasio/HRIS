<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Memorandum
 * @package App\Models
 * @version August 28, 2017, 9:51 am +08
 *
 * @property string name
 * @property string description
 * @property json file
 * @property string tag
 * @property integer user_id
 */
class Memorandum extends Model
{
    use SoftDeletes;

    public $table = 'memoranda';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'file',
        'tag',
        'user_id'
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
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'file' => 'required',
        'tag' => 'required'
    ];

    
}
