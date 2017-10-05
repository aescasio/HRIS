<?php

namespace App\Repositories;

use App\Models\Policy;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PolicyRepository
 * @package App\Repositories
 * @version August 28, 2017, 9:43 am +08
 *
 * @method Policy findWithoutFail($id, $columns = ['*'])
 * @method Policy find($id, $columns = ['*'])
 * @method Policy first($columns = ['*'])
*/
class PolicyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'tag',
        'file'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Policy::class;
    }
}
