<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEmployeesRequest;
use App\Http\Requests\UpdateEmployeesRequest;
use App\Models\Employees;
use App\Repositories\EmployeesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\CodeLookUps;
use App\Models\EmploymentHistory;

class EmployeesController extends AppBaseController
{
    /** @var  EmployeesRepository */
    private $employeesRepository, $employees, $employmentHistory;


    public function __construct(EmployeesRepository $employeesRepo, Employees $employees, EmploymentHistory $employmentHistory)
    {
        $this->employeesRepository = $employeesRepo;
        $this->employees = $employees;
        $this->employmentHistory = $employmentHistory;
    }

    /**
     * Display a listing of the Employees.
     *
     * @param EmployeesDataTable $employeesDataTable
     * @return Response
     */
    public function index(EmployeesDataTable $employeesDataTable)
    {
        return $employeesDataTable->render('employees.index');
    }

    /**
     * Show the form for creating a new Employees.
     *
     * @return Response
     */
    public function create()
    {

        $nationality = $this->getNationality();

        return view('employees.create')->with('nationality', $nationality);

    }

    /**
     * Store a newly created Employees in storage.
     *
     * @param CreateEmployeesRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeesRequest $request)
    {

        $employees = Employees::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            'sss' => $request->sss,
            'phic' => $request->phic,
            'hdmf' => $request->hdmf,
            'bir' => $request->bir,
            'tax_code' => $request->tax_code,
            'drivers_license' => $request->drivers_license,
            'sick_leave' => $request->sick_leave,
            'vacation_leave' => $request->vacation_leave,
            'emergency_leave' => $request->emergency_leave,
            'status' => $request->status,
            'email' => $request->email,
            'civil_status' => $request->civil_status,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'contact_numbers' => $request->contact_numbers,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'affiliations' => $request->affiliations,
            'professional_license' => $request->professional_license,
        ]);
        
        $id = $employees['id'];
        $count = count($request->emp_name);

        for ($i = 0; $i < $count; $i++ ){
//            $employees = Employees::find($id);
            if(isset($request->emp_name[$i])){
                EmploymentHistory::create([
                    'name' => $request->emp_name[$i],
                    'start_date' => $request->emp_start_date[$i],
                    'end_date' => $request->emp_end_date[$i],
                    'job_title' => $request->emp_job_title[$i],
                    'starting_salary' => $request->emp_starting_salary[$i],
                    'final_salary' => $request->emp_final_salary[$i],
                    'reason' => $request->emp_reason[$i],
                    'industry_type' => $request->emp_industry_type[$i],
                    'employment_status' => $request->emp_status[$i],
                    'employees_id' => $id
                ]);
            }
        }

        Flash::success('Employees saved successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Display the specified Employees.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employees = $this->employeesRepository->findWithoutFail($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        return view('employees.show')->with('employees', $employees);
    }

    /**
     * Show the form for editing the specified Employees.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
//        $employees = $this->employeesRepository->findWithoutFail($id);
        $employees = Employees::findOrFail($id);
        $employment_history = EmploymentHistory::findOrFail($id);

        $nationality = $this->getNationality();

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        return view('employees.edit')->with([
            'employees' => $employees,
            'nationality'=> $nationality,
            'employment_history' => $employment_history
        ]);
    }

    /**
     * Update the specified Employees in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeesRequest $request)
    {
//        $employees = $this->employeesRepository->findWithoutFail($id);
        $employees = $this->employees->findWithoutFail($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

//        $account = Account::find(99);
//        User::find(1)->account()->associate($account)->save();

        $employees = $this->employees->update($request->all(), $id);


//        $employment = $this->employmentHistory->findWhereIn('employees_id', $request->employee_id);
//        $employment->field_name = $request->emp_name;
//        $this->employees->find($id)->employmentHistory()->associate($employment)->save();

        for ($i = 0; $i < count($request->emp_id); $i++ ){
//            $employees = Employees::find($id);
            if(isset($request->emp_id[$i])){
                $this->employmentHistory->update([
                    'name' => $request->emp_name[$i],
                    'start_date' => $request->emp_start_date[$i],
                    'end_date' => $request->emp_end_date[$i],
                    'job_title' => $request->emp_job_title[$i],
                    'starting_salary' => $request->emp_starting_salary[$i],
                    'final_salary' => $request->emp_final_salary[$i],
                    'reason' => $request->emp_reason[$i],
                    'industry_type' => $request->emp_industry_type[$i],
                    'employment_status' => $request->emp_status[$i],
                    'employees_id' => $employees['id']
                ], $request->emp_id);

            }
        }

        Flash::success('Employees updated successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified Employees from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employees = $this->employeesRepository->findWithoutFail($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        $this->employeesRepository->delete($id);

        Flash::success('Employees deleted successfully.');

        return redirect(route('employees.index'));
    }

    public function destroyEmployment($id){
        $employment = $this->employmentHistory->find($id);

        if (empty($employment)){
            Flash::error('Employment record not found');

            return redirect(route('employees.index'));
        }

        $this->employmentHistory->delete($id);

        Flash::success('Employment record deleted successfully.');

        return redirect(route('employees.edit'));
    }
    /**
     * @return mixed
     */
    public function getNationality()
    {
        $nationality = CodeLookUps::query()
            ->where('typename', 'EMP_NATIONALITY')
            ->orderBy('string2', 'asc')
            ->pluck('string2', 'string2');

        return $nationality;
    }
}
