<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoutineRequest;
use App\Http\Requests\UpdateRoutineRequest;
use App\Repositories\RoutineRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RoutineUserRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RoutineController extends AppBaseController
{
    /** @var  RoutineRepository */
    private $routineRepository;
    private $routineUserRepository;

    public function __construct(RoutineRepository $routineRepo, RoutineUserRepository $routineUserRepo)
    {
        $this->routineRepository = $routineRepo;
        $this->routineUserRepository = $routineUserRepo;
    }

    /**
     * Display a listing of the Routine.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->routineRepository->pushCriteria(new RequestCriteria($request));
        $routines = $this->routineRepository->all();
        $routineUsers = $this->routineUserRepository->all();

        return view('routines.index', compact('routines', 'routineUsers'));
    }

    /**
     * Show the form for creating a new Routine.
     *
     * @return Response
     */
    public function create()
    {
        return view('routines.create');
    }

    /**
     * Store a newly created Routine in storage.
     *
     * @param CreateRoutineRequest $request
     *
     * @return Response
     */
    public function store(CreateRoutineRequest $request)
    {
        $input = $request->all();

        $routine = $this->routineRepository->create($input);

        Flash::success('Routine saved successfully.');

        return redirect(route('routines.index'));
    }

    /**
     * Display the specified Routine.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $routine = $this->routineRepository->findWithoutFail($id);

        if (empty($routine)) {
            Flash::error('Routine not found');

            return redirect(route('routines.index'));
        }

        return view('routines.show')->with('routine', $routine);
    }

    /**
     * Show the form for editing the specified Routine.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $routine = $this->routineRepository->findWithoutFail($id);

        if (empty($routine)) {
            Flash::error('Routine not found');

            return redirect(route('routines.index'));
        }

        return view('routines.edit')->with('routine', $routine);
    }

    /**
     * Update the specified Routine in storage.
     *
     * @param  int              $id
     * @param UpdateRoutineRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoutineRequest $request)
    {
        $routine = $this->routineRepository->findWithoutFail($id);

        if (empty($routine)) {
            Flash::error('Routine not found');

            return redirect(route('routines.index'));
        }

        $routine = $this->routineRepository->update($request->all(), $id);

        Flash::success('Routine updated successfully.');

        return redirect(route('routines.index'));
    }

    /**
     * Remove the specified Routine from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $routine = $this->routineRepository->findWithoutFail($id);

        if (empty($routine)) {
            Flash::error('Routine not found');

            return redirect(route('routines.index'));
        }

        $this->routineRepository->delete($id);

        Flash::success('Routine deleted successfully.');

        return redirect(route('routines.index'));
    }
}
