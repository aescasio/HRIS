<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CodeLookUps extends Model
{
    use SoftDeletes;

    public $table = 'codelookups';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'typename',
        'description',
        'code',
        'value',
        'string',
        'value2',
        'string2',
        'binary',
        'memo',
        'bool'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'typename'=>'string',
        'description'=>'string',
        'code'=>'integer',
        'value'=>'',
        'string'=>'string',
        'value2'=>'',
        'string2'=>'string',
        'binary'=>'numeric',
        'memo'=>'string',
        'bool'=>'boolean',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'typename'=>'required',

    ];
}
