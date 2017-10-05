<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmploymentHistoryRequest;
use App\Http\Requests\UpdateEmploymentHistoryRequest;
use App\Repositories\EmploymentHistoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EmploymentHistoryController extends AppBaseController
{
    /** @var  EmploymentHistoryRepository */
    private $employmentHistoryRepository;

    public function __construct(EmploymentHistoryRepository $employmentHistoryRepo)
    {
        $this->employmentHistoryRepository = $employmentHistoryRepo;
    }

    /**
     * Display a listing of the EmploymentHistory.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->employmentHistoryRepository->pushCriteria(new RequestCriteria($request));
        $employmentHistories = $this->employmentHistoryRepository->paginate(15);

        return view('employment_histories.index')
            ->with('employmentHistories', $employmentHistories);
    }

    /**
     * Show the form for creating a new EmploymentHistory.
     *
     * @return Response
     */
    public function create()
    {
        return view('employment_histories.create');
    }

    /**
     * Store a newly created EmploymentHistory in storage.
     *
     * @param CreateEmploymentHistoryRequest $request
     *
     * @return Response
     */
    public function store(CreateEmploymentHistoryRequest $request)
    {
        $input = $request->all();

        $employmentHistory = $this->employmentHistoryRepository->create($input);

        Flash::success('Employment History saved successfully.');

        return redirect(route('employmentHistories.index'));
    }

    /**
     * Display the specified EmploymentHistory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $employmentHistory = $this->employmentHistoryRepository->findWithoutFail($id);

        if (empty($employmentHistory)) {
            Flash::error('Employment History not found');

            return redirect(route('employmentHistories.index'));
        }

        return view('employment_histories.show')->with('employmentHistory', $employmentHistory);
    }

    /**
     * Show the form for editing the specified EmploymentHistory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $employmentHistory = $this->employmentHistoryRepository->findWithoutFail($id);

        if (empty($employmentHistory)) {
            Flash::error('Employment History not found');

            return redirect(route('employmentHistories.index'));
        }

        return view('employment_histories.edit')->with('employmentHistory', $employmentHistory);
    }

    /**
     * Update the specified EmploymentHistory in storage.
     *
     * @param  int              $id
     * @param UpdateEmploymentHistoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmploymentHistoryRequest $request)
    {
        $employmentHistory = $this->employmentHistoryRepository->findWithoutFail($id);

        if (empty($employmentHistory)) {
            Flash::error('Employment History not found');

            return redirect(route('employmentHistories.index'));
        }

        $employmentHistory = $this->employmentHistoryRepository->update($request->all(), $id);

        Flash::success('Employment History updated successfully.');

        return redirect(route('employmentHistories.index'));
    }

    /**
     * Remove the specified EmploymentHistory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $employmentHistory = $this->employmentHistoryRepository->findWithoutFail($id);

        if (empty($employmentHistory)) {
            Flash::error('Employment History not found');

            return redirect(route('employmentHistories.index'));
        }

        $this->employmentHistoryRepository->delete($id);

        Flash::success('Employment History deleted successfully.');

        return redirect(route('employmentHistories.index'));
    }
}
