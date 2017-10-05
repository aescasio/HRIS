<?php

namespace App\DataTables;

use App\Models\Memorandum;
use Form;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class MemorandumDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
//    public function ajax()
//    {
//        return $this->datatables
//            ->eloquent($this->query())
//            ->addColumn('action', 'memoranda.datatables_actions')
//            ->make(true);
//    }

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'memoranda.datatables_actions');
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $memoranda = Memorandum::query();

        return $this->applyScopes($memoranda);
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
    private function getColumns()
    {
        return [
            'name' => ['name' => 'name', 'data' => 'name'],
            'description' => ['name' => 'description', 'data' => 'description'],
            'tag' => ['name' => 'tag', 'data' => 'tag']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'memoranda';
    }
}
