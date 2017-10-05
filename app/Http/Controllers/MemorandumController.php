<?php

namespace App\Http\Controllers;

use App\DataTables\MemorandumDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMemorandumRequest;
use App\Http\Requests\UpdateMemorandumRequest;
use App\Repositories\MemorandumRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Auth;
class MemorandumController extends AppBaseController
{
    /** @var  MemorandumRepository */
    private $memorandumRepository;

    public function __construct(MemorandumRepository $memorandumRepo)
    {
        $this->memorandumRepository = $memorandumRepo;
    }

    /**
     * Display a listing of the Memorandum.
     *
     * @param MemorandumDataTable $memorandumDataTable
     * @return Response
     */
    public function index(MemorandumDataTable $memorandumDataTable)
    {
        return $memorandumDataTable->render('memoranda.index');
    }

    /**
     * Show the form for creating a new Memorandum.
     *
     * @return Response
     */
    public function create()
    {
        return view('memoranda.create');
    }

    /**
     * Store a newly created Memorandum in storage.
     *
     * @param CreateMemorandumRequest $request
     *
     * @return Response
     */
    public function store(CreateMemorandumRequest $request)
    {
        $input = $request->all();

        $file_name = $request->file('file')->getClientOriginalName();

        $file = json_encode(array("user_id" => Auth::id(), "file_name" =>$file_name ));

        $input['file'] = $file;
        $input['user_id'] = Auth::id();

        $memorandum = $this->memorandumRepository->create($input);

        if($request->hasFile('file')){
            request()->file('file')->storeAs('memoranda'.'/'.Auth::id().'/',$file_name);
        }

        Flash::success('Memorandum saved successfully.');

        return redirect(route('memoranda.index'));
    }

    /**
     * Display the specified Memorandum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $memorandum = $this->memorandumRepository->findWithoutFail($id);

        if (empty($memorandum)) {
            Flash::error('Memorandum not found');

            return redirect(route('memoranda.index'));
        }

        return view('memoranda.show')->with('memorandum', $memorandum);
    }

    /**
     * Show the form for editing the specified Memorandum.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $memorandum = $this->memorandumRepository->findWithoutFail($id);

        if (empty($memorandum)) {
            Flash::error('Memorandum not found');

            return redirect(route('memoranda.index'));
        }

        return view('memoranda.edit')->with('memorandum', $memorandum);
    }

    /**
     * Update the specified Memorandum in storage.
     *
     * @param  int              $id
     * @param UpdateMemorandumRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMemorandumRequest $request)
    {
        $memorandum = $this->memorandumRepository->findWithoutFail($id);

        if (empty($memorandum)) {
            Flash::error('Memorandum not found');

            return redirect(route('memoranda.index'));
        }

        $memorandum = $this->memorandumRepository->update($request->all(), $id);

        Flash::success('Memorandum updated successfully.');

        return redirect(route('memoranda.index'));
    }

    /**
     * Remove the specified Memorandum from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $memorandum = $this->memorandumRepository->findWithoutFail($id);

        if (empty($memorandum)) {
            Flash::error('Memorandum not found');

            return redirect(route('memoranda.index'));
        }

        $this->memorandumRepository->delete($id);

        Flash::success('Memorandum deleted successfully.');

        return redirect(route('memoranda.index'));
    }

    public function showPDF($id){

        $memorandum = $this->memorandumRepository->findWithoutFail($id);

        $file_column = json_decode($memorandum->file);

        $user_id = $file_column->{'user_id'};
        $file_name = $file_column->{'file_name'};

        return Response::make(file_get_contents(storage_path('app\\memoranda\\' . $user_id . '\\' . $file_name)), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$file_name.'"'
        ]);
    }
}
