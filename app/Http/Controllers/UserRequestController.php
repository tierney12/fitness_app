<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequestRequest;
use App\Http\Requests\UpdateUserRequestRequest;
use App\Repositories\UserRequestRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserRequestController extends AppBaseController
{
    /** @var  UserRequestRepository */
    private $userRequestRepository;

    public function __construct(UserRequestRepository $userRequestRepo)
    {
        $this->userRequestRepository = $userRequestRepo;
    }

    /**
     * Display a listing of the UserRequest.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRequestRepository->pushCriteria(new RequestCriteria($request));
        $userRequests = $this->userRequestRepository->all();

        return view('user_requests.index')
            ->with('userRequests', $userRequests);
    }

    /**
     * Show the form for creating a new UserRequest.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_requests.create');
    }

    /**
     * Store a newly created UserRequest in storage.
     *
     * @param CreateUserRequestRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequestRequest $request)
    {
        $input = $request->all();

        $userRequest = $this->userRequestRepository->create($input);

        Flash::success('User Request saved successfully.');

        return redirect(route('userRequests.index'));
    }

    /**
     * Display the specified UserRequest.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userRequest = $this->userRequestRepository->findWithoutFail($id);

        if (empty($userRequest)) {
            Flash::error('User Request not found');

            return redirect(route('userRequests.index'));
        }

        return view('user_requests.show')->with('userRequest', $userRequest);
    }

    /**
     * Show the form for editing the specified UserRequest.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userRequest = $this->userRequestRepository->findWithoutFail($id);

        if (empty($userRequest)) {
            Flash::error('User Request not found');

            return redirect(route('userRequests.index'));
        }

        return view('user_requests.edit')->with('userRequest', $userRequest);
    }

    /**
     * Update the specified UserRequest in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequestRequest $request)
    {
        $userRequest = $this->userRequestRepository->findWithoutFail($id);

        if (empty($userRequest)) {
            Flash::error('User Request not found');

            return redirect(route('userRequests.index'));
        }

        $userRequest = $this->userRequestRepository->update($request->all(), $id);

        Flash::success('User Request updated successfully.');

        return redirect(route('userRequests.index'));
    }

    /**
     * Remove the specified UserRequest from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userRequest = $this->userRequestRepository->findWithoutFail($id);

        if (empty($userRequest)) {
            Flash::error('User Request not found');

            return redirect(route('userRequests.index'));
        }

        $this->userRequestRepository->delete($id);

        Flash::success('User Request deleted successfully.');

        return redirect(route('userRequests.index'));
    }
}
