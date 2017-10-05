<?php

namespace App\DataTables;

use App\Models\Employees;
use Form;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\EloquentDataTable;

class EmployeesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
//    public function ajax()
//    {
//        $employees = $this->query();
//
//        return $this->datatables
//            ->eloquent($employees)
//            ->addColumn('action', 'employees.datatables_actions')
////            ->addColumn('full_name', function ($employees){
////                return $employees->first_name . ' ' . substr($employees->middle_name, 0 , 1) . '. ' . $employees->last_name;
////            })
//            ->make(true);
//    }
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'employees.datatables_actions');
    }
    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $employees = Employees::query();
//        $employees->middle_name = getMiddleName($employees->middle_name);

//        $employees = Employees::select([
//            'id',
//            'first_name',
//            'middle_name',
//            'last_name',
//            DB::raw("CONCAT('first_name ',' middle_name ',' last_name') AS full_name")]);
//        dd($employees);
        return $this->applyScopes($employees);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'full_name' => ['name' => 'full_name', 'data' => 'full_name'],
            'first_name' => ['name' => 'first_name', 'data' => 'first_name'],
            'middle_name' => ['name' => 'middle_name', 'data' => 'middle_name'],
            'last_name' => ['name' => 'last_name', 'data' => 'last_name'],
//            'birth_date' => ['name' => 'birth_date', 'data' => 'birth_date'],
//            'birth_place' => ['name' => 'birth_place', 'data' => 'birth_place'],
//            'sss' => ['name' => 'sss', 'data' => 'sss'],
//            'phic' => ['name' => 'phic', 'data' => 'phic'],
//            'hdmf' => ['name' => 'hdmf', 'data' => 'hdmf'],
//            'bir' => ['name' => 'bir', 'data' => 'bir'],
//            'tax_code' => ['name' => 'tax_code', 'data' => 'tax_code'],
//            'drivers_license' => ['name' => 'drivers_license', 'data' => 'drivers_license'],
//            'sick_leave' => ['name' => 'sick_leave', 'data' => 'sick_leave'],
//            'vacation_leave' => ['name' => 'vacation_leave', 'data' => 'vacation_leave'],
//            'status' => ['name' => 'status', 'data' => 'status'],
//            'email' => ['name' => 'email', 'data' => 'email'],
//            'civil_status' => ['name' => 'civil_status', 'data' => 'civil_status'],
//            'nationality' => ['name' => 'nationality', 'data' => 'nationality'],
//            'religion' => ['name' => 'religion', 'data' => 'religion'],
//            'contact_numbers' => ['name' => 'contact_numbers', 'data' => 'contact_numbers'],
//            'present_address' => ['name' => 'present_address', 'data' => 'present_address'],
//            'permanent_address,nullable' => ['name' => 'permanent_address,nullable', 'data' => 'permanent_address,nullable'],
//            'affiliations' => ['name' => 'affiliations', 'data' => 'affiliations'],
//            'professional_license' => ['name' => 'professional_license', 'data' => 'professional_license']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'employees';
    }

}
