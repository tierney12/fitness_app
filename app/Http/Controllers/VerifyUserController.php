<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVerifyUserRequest;
use App\Http\Requests\UpdateVerifyUserRequest;
use App\Repositories\VerifyUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VerifyUserController extends AppBaseController
{
    /** @var  VerifyUserRepository */
    private $verifyUserRepository;

    public function __construct(VerifyUserRepository $verifyUserRepo)
    {
        $this->verifyUserRepository = $verifyUserRepo;
    }

    /**
     * Display a listing of the VerifyUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->verifyUserRepository->pushCriteria(new RequestCriteria($request));
        $verifyUsers = $this->verifyUserRepository->all();

        return view('verify_users.index')
            ->with('verifyUsers', $verifyUsers);
    }

    /**
     * Show the form for creating a new VerifyUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('verify_users.create');
    }

    /**
     * Store a newly created VerifyUser in storage.
     *
     * @param CreateVerifyUserRequest $request
     *
     * @return Response
     */
    public function store(CreateVerifyUserRequest $request)
    {
        $input = $request->all();

        $verifyUser = $this->verifyUserRepository->create($input);

        Flash::success('Verify User saved successfully.');

        return redirect(route('verifyUsers.index'));
    }

    /**
     * Display the specified VerifyUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $verifyUser = $this->verifyUserRepository->findWithoutFail($id);

        if (empty($verifyUser)) {
            Flash::error('Verify User not found');

            return redirect(route('verifyUsers.index'));
        }

        return view('verify_users.show')->with('verifyUser', $verifyUser);
    }

    /**
     * Show the form for editing the specified VerifyUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $verifyUser = $this->verifyUserRepository->findWithoutFail($id);

        if (empty($verifyUser)) {
            Flash::error('Verify User not found');

            return redirect(route('verifyUsers.index'));
        }

        return view('verify_users.edit')->with('verifyUser', $verifyUser);
    }

    /**
     * Update the specified VerifyUser in storage.
     *
     * @param  int              $id
     * @param UpdateVerifyUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVerifyUserRequest $request)
    {
        $verifyUser = $this->verifyUserRepository->findWithoutFail($id);

        if (empty($verifyUser)) {
            Flash::error('Verify User not found');

            return redirect(route('verifyUsers.index'));
        }

        $verifyUser = $this->verifyUserRepository->update($request->all(), $id);

        Flash::success('Verify User updated successfully.');

        return redirect(route('verifyUsers.index'));
    }

    /**
     * Remove the specified VerifyUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $verifyUser = $this->verifyUserRepository->findWithoutFail($id);

        if (empty($verifyUser)) {
            Flash::error('Verify User not found');

            return redirect(route('verifyUsers.index'));
        }

        $this->verifyUserRepository->delete($id);

        Flash::success('Verify User deleted successfully.');

        return redirect(route('verifyUsers.index'));
    }
}
