<?php

namespace App\Repositories;

use App\Models\Employees;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmployeesRepository
 * @package App\Repositories
 * @version September 7, 2017, 3:17 pm +08
 *
 * @method Employees findWithoutFail($id, $columns = ['*'])
 * @method Employees find($id, $columns = ['*'])
 * @method Employees first($columns = ['*'])
*/
class EmployeesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'status',
        'email',
        'civil_status',
        'nationality',
        'religion',
        'contact_numbers',
        'present_address',
        'permanent_address,nullable',
        'affiliations',
        'professional_license'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employees::class;
    }
}
