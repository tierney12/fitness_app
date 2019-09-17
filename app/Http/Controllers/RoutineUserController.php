<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoutineUserRequest;
use App\Http\Requests\UpdateRoutineUserRequest;
use App\Repositories\RoutineUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RoutineUserController extends AppBaseController
{
    /** @var  RoutineUserRepository */
    private $routineUserRepository;

    public function __construct(RoutineUserRepository $routineUserRepo)
    {
        $this->routineUserRepository = $routineUserRepo;
    }

    /**
     * Display a listing of the RoutineUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->routineUserRepository->pushCriteria(new RequestCriteria($request));
        $routineUsers = $this->routineUserRepository->all();

        return view('routine_users.index')
            ->with('routineUsers', $routineUsers);
    }

    /**
     * Show the form for creating a new RoutineUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('routine_users.create');
    }

    /**
     * Store a newly created RoutineUser in storage.
     *
     * @param CreateRoutineUserRequest $request
     *
     * @return Response
     */
    public function store(CreateRoutineUserRequest $request)
    {
        $input = $request->all();

        $routineUser = $this->routineUserRepository->create($input);

        Flash::success('Routine User saved successfully.');

        return redirect(route('routines.index'));
    }

    /**
     * Display the specified RoutineUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $routineUser = $this->routineUserRepository->findWithoutFail($id);

        if (empty($routineUser)) {
            Flash::error('Routine User not found');

            return redirect(route('routines.index'));
        }

        return view('routine_users.show')->with('routineUser', $routineUser);
    }

    /**
     * Show the form for editing the specified RoutineUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $routineUser = $this->routineUserRepository->findWithoutFail($id);

        if (empty($routineUser)) {
            Flash::error('Routine User not found');

            return redirect(route('routines.index'));
        }

        return view('routine_users.edit')->with('routineUser', $routineUser);
    }

    /**
     * Update the specified RoutineUser in storage.
     *
     * @param  int              $id
     * @param UpdateRoutineUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoutineUserRequest $request)
    {
        $routineUser = $this->routineUserRepository->findWithoutFail($id);

        if (empty($routineUser)) {
            Flash::error('Routine User not found');

            return redirect(route('routines.index'));
        }

        $routineUser = $this->routineUserRepository->update($request->all(), $id);

        Flash::success('Routine User updated successfully.');

        return redirect(route('routines.index'));
    }

    /**
     * Remove the specified RoutineUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $routineUser = $this->routineUserRepository->findWithoutFail($id);

        if (empty($routineUser)) {
            Flash::error('Routine User not found');

            return redirect(route('routines.index'));
        }

        $this->routineUserRepository->delete($id);

        Flash::success('Routine User deleted successfully.');

        return redirect(route('routines.index'));
    }
}
