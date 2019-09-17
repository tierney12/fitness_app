<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExerciseUserRequest;
use App\Http\Requests\UpdateExerciseUserRequest;
use App\Repositories\ExerciseUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ExerciseUserController extends AppBaseController
{
    /** @var  ExerciseUserRepository */
    private $exerciseUserRepository;

    public function __construct(ExerciseUserRepository $exerciseUserRepo)
    {
        $this->exerciseUserRepository = $exerciseUserRepo;
    }

    /**
     * Display a listing of the ExerciseUser.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->exerciseUserRepository->pushCriteria(new RequestCriteria($request));
        $exerciseUsers = $this->exerciseUserRepository->all();

        return view('exercise_users.index')
            ->with('exerciseUsers', $exerciseUsers);
    }

    /**
     * Show the form for creating a new ExerciseUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('exercise_users.create');
    }

    /**
     * Store a newly created ExerciseUser in storage.
     *
     * @param CreateExerciseUserRequest $request
     *
     * @return Response
     */
    public function store(CreateExerciseUserRequest $request)
    {
        $input = $request->all();

        $exerciseUser = $this->exerciseUserRepository->create($input);

        Flash::success('Your exercise has been logged successfully.');

        return redirect(route('exercises.index'));
    }

    /**
     * Display the specified ExerciseUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $exerciseUser = $this->exerciseUserRepository->findWithoutFail($id);

        if (empty($exerciseUser)) {
            Flash::error('This log was not found');

            return redirect(route('exerciseUsers.index'));
        }

        return view('exercise_users.show')->with('exerciseUser', $exerciseUser);
    }

    /**
     * Show the form for editing the specified ExerciseUser.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $exerciseUser = $this->exerciseUserRepository->findWithoutFail($id);

        if (empty($exerciseUser)) {
            Flash::error('This log was not found');

            return redirect(route('exercises.index'));
        }

        return view('exercise_users.edit')->with('exerciseUser', $exerciseUser);
    }

    /**
     * Update the specified ExerciseUser in storage.
     *
     * @param  int              $id
     * @param UpdateExerciseUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExerciseUserRequest $request)
    {
        $exerciseUser = $this->exerciseUserRepository->findWithoutFail($id);

        if (empty($exerciseUser)) {
            Flash::error('This log was not found');

            return redirect(route('exercises.index'));
        }

        $exerciseUser = $this->exerciseUserRepository->update($request->all(), $id);

        Flash::success('This log was updated successfully.');

        return redirect(route('exercises.index'));
    }

    /**
     * Remove the specified ExerciseUser from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $exerciseUser = $this->exerciseUserRepository->findWithoutFail($id);

        if (empty($exerciseUser)) {
            Flash::error('This log was not found');

            return redirect(route('exercises.index'));
        }

        $this->exerciseUserRepository->delete($id);

        Flash::success('This log was deleted successfully.');

        return redirect(route('exercises.index'));
    }
}
