<?php

namespace App\DataTables\Admin;

use App\Models\User;
use Form;
use Yajra\DataTables\Services\DataTable;
use Carbon\Carbon;
use Yajra\DataTables\EloquentDataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'admin.users.datatables_actions');
    }
    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $users = User::query();

        return $this->applyScopes($users);
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
                    ->minifiedAjax('')
                    ->addAction(['width' => '80px'])
                    ->parameters([
                        'dom' => 'Bfrtip',
                        'scrollX' => false,
                        'buttons' => [
                            'create',
                            'print',
                            'reset',
                            'reload',
                            [
                                'extend'  => 'collection',
                                'text'    => '<i class="fa fa-download"></i> Export',
                                'buttons' => [
                                    'csv',
                                    'excel',
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
    protected function getColumns()
    {
        return [
            'name'=>['name'=>'name', 'data'=>'name'],
            'email'=>['name'=>'email', 'data'=>'email'],
            'created_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'users_' . date('m_d_y_H_i', strtotime(Carbon::now()) );
    }
}
