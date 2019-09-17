<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExerciseRequest;
use App\Http\Requests\UpdateExerciseRequest;
use App\Repositories\ExerciseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ExerciseController extends AppBaseController
{
    /** @var  ExerciseRepository */
    private $exerciseRepository;

    public function __construct(ExerciseRepository $exerciseRepo)
    {
        $this->exerciseRepository = $exerciseRepo;
    }

    /**
     * Display a listing of the Exercise.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->exerciseRepository->pushCriteria(new RequestCriteria($request));
        $exercises = $this->exerciseRepository->all();

        return view('exercises.index')
            ->with('exercises', $exercises);
    }

    /**
     * Show the form for creating a new Exercise.
     *
     * @return Response
     */
    public function create()
    {
        return view('exercises.create');
    }

    /**
     * Store a newly created Exercise in storage.
     *
     * @param CreateExerciseRequest $request
     *
     * @return Response
     */
    public function store(CreateExerciseRequest $request)
    {
        $input = $request->all();

        $exercise = $this->exerciseRepository->create($input);

        Flash::success('Exercise saved successfully.');

        return redirect(route('exercises.index'));
    }

    /**
     * Display the specified Exercise.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $exercise = $this->exerciseRepository->findWithoutFail($id);

        if (empty($exercise)) {
            Flash::error('Exercise not found');

            return redirect(route('exercises.index'));
        }

        return view('exercises.show')->with('exercise', $exercise);
    }

    /**
     * Show the form for editing the specified Exercise.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $exercise = $this->exerciseRepository->findWithoutFail($id);

        if (empty($exercise)) {
            Flash::error('Exercise not found');

            return redirect(route('exercises.index'));
        }

        return view('exercises.edit')->with('exercise', $exercise);
    }

    /**
     * Update the specified Exercise in storage.
     *
     * @param  int              $id
     * @param UpdateExerciseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExerciseRequest $request)
    {
        $exercise = $this->exerciseRepository->findWithoutFail($id);

        if (empty($exercise)) {
            Flash::error('Exercise not found');

            return redirect(route('exercises.index'));
        }

        $exercise = $this->exerciseRepository->update($request->all(), $id);

        Flash::success('Exercise updated successfully.');

        return redirect(route('exercises.index'));
    }

    /**
     * Remove the specified Exercise from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $exercise = $this->exerciseRepository->findWithoutFail($id);

        if (empty($exercise)) {
            Flash::error('Exercise not found');

            return redirect(route('exercises.index'));
        }

        $this->exerciseRepository->delete($id);

        Flash::success('Exercise deleted successfully.');

        return redirect(route('exercises.index'));
    }
}
