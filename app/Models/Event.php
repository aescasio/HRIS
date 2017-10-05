<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Event
 * @package App\Models
 * @version August 30, 2017, 8:56 am +08
 *
 * @property string title
 * @property string description
 * @property string|\Carbon\Carbon start
 * @property string|\Carbon\Carbon end
 * @property string background_color
 * @property string border_color
 * @property boolean all_day
 * @property string url
 */
class Event extends Model
{
    use SoftDeletes;

    public $table = 'events';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'start',
        'end',
        'backgroundColor',
        'borderColor',
        'allDay',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'backgroundColor' => 'string',
        'borderColor' => 'string',
        'all_day' => 'boolean',
        'url' => 'url',
        'start' => 'date',
        'end' => 'date',
        'allDay' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'start' => 'required',
        'end' => 'required',
        'backgroundColor' => 'required',
        'borderColor' => 'required'
    ];

    
}
