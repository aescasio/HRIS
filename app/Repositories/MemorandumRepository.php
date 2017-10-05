<?php

namespace App\Repositories;

use App\Models\Memorandum;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MemorandumRepository
 * @package App\Repositories
 * @version August 28, 2017, 9:51 am +08
 *
 * @method Memorandum findWithoutFail($id, $columns = ['*'])
 * @method Memorandum find($id, $columns = ['*'])
 * @method Memorandum first($columns = ['*'])
*/
class MemorandumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'tag',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Memorandum::class;
    }
}
