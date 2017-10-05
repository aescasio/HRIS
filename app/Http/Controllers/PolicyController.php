<?php

namespace App\Http\Controllers;

use App\DataTables\PolicyDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePolicyRequest;
use App\Http\Requests\UpdatePolicyRequest;
use App\Models\User;
use App\Repositories\PolicyRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Auth;
use Storage;
use BPDF;
class PolicyController extends AppBaseController
{
    /** @var  PolicyRepository */
    private $policyRepository;

    public function __construct(PolicyRepository $policyRepo)
    {
        $this->policyRepository = $policyRepo;

    }

    /**
     * Display a listing of the Policy.
     *
     * @param PolicyDataTable $policyDataTable
     * @return Response
     */
    public function index(PolicyDataTable $policyDataTable)
    {
        return $policyDataTable->render('policies.index');
    }

    /**
     * Show the form for creating a new Policy.
     *
     * @return Response
     */
    public function create()
    {
        return view('policies.create');
    }

    /**
     * Store a newly created Policy in storage.
     *
     * @param CreatePolicyRequest $request
     *
     * @return Response
     */
    public function store(CreatePolicyRequest $request)
    {
//        dd($request->all());
//        if($request->hasFile('file')){
//            $files = $request->file('file');
//
//            return [
//                'path' => $files->getRealPath(),
//                'size' => $files->getSize(),
//                'mime' => $files->getMimeType(),
//                'name' => $files->getClientOriginalName(),
//                'extension' => $files->getClientOriginalExtension()
//            ];
//        }

        $input = $request->all();

        $file_name = $request->file('file')->getClientOriginalName();

        $file = json_encode(array("user_id" => Auth::id(), "file_name" =>$file_name ));

        $input['file'] = $file;

        $policy = $this->policyRepository->create($input);


        if($request->hasFile('file')){
//            request()->file('file')->store('policies'.'/'.Auth::id().'/');
            request()->file('file')->storeAs('policies'.'/'.Auth::id().'/',$file_name);
        }

        Flash::success('Policy saved successfully.');

        return redirect(route('policies.index'));
    }

    /**
     * Display the specified Policy.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {

        $policy = $this->policyRepository->findWithoutFail($id);

        $file = json_decode($policy->file);

        $full_path_file = Storage::url('app/policies/'.$file->{'user_id'}.'/'.$file->{'file_name'});

//        dd($full_path_file);
//        dd(storage_path('policies\\'.$file->{'user_id'}.'\\'.$file->{'file_name'}));
        if (empty($policy)) {
            Flash::error('Policy not found');

            return redirect(route('policies.index'));
        }

        return view('policies.show')->with(['policy'=>$policy, 'file' => $file]);
    }

    /**
     * Show the form for editing the specified Policy.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $policy = $this->policyRepository->findWithoutFail($id);

        if (empty($policy)) {
            Flash::error('Policy not found');

            return redirect(route('policies.index'));
        }

        return view('policies.edit')->with('policy', $policy);
    }

    /**
     * Update the specified Policy in storage.
     *
     * @param  int              $id
     * @param UpdatePolicyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePolicyRequest $request)
    {
        $policy = $this->policyRepository->findWithoutFail($id);

        if (empty($policy)) {
            Flash::error('Policy not found');

            return redirect(route('policies.index'));
        }

        $policy = $this->policyRepository->update($request->all(), $id);

        Flash::success('Policy updated successfully.');

        return redirect(route('policies.index'));
    }

    /**
     * Remove the specified Policy from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $policy = $this->policyRepository->findWithoutFail($id);

        if (empty($policy)) {
            Flash::error('Policy not found');

            return redirect(route('policies.index'));
        }

        $this->policyRepository->delete($id);

        Flash::success('Policy deleted successfully.');

        return redirect(route('policies.index'));
    }

    public function showPDF($id){

        $policy = $this->policyRepository->findWithoutFail($id);

        $file = json_decode($policy->file);

        $user_id = $file->{'user_id'};
        $file_name = $file->{'file_name'};

//        $full_path_file = Storage::url('app/policies/'.$file->{'user_id'}.'/'.$file->{'file_name'});

        return Response::make(file_get_contents(storage_path('app\\policies\\' . $user_id . '\\' . $file_name)), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$file_name.'"'
        ]);
    }
}
