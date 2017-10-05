<?php

namespace App\Repositories;

use App\Models\Event;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EventRepository
 * @package App\Repositories
 * @version August 30, 2017, 8:56 am +08
 *
 * @method Event findWithoutFail($id, $columns = ['*'])
 * @method Event find($id, $columns = ['*'])
 * @method Event first($columns = ['*'])
*/
class EventRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'start',
        'end',
        'all_day'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Event::class;
    }
}
