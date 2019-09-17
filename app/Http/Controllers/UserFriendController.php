<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserFriendRequest;
use App\Http\Requests\UpdateUserFriendRequest;
use App\Repositories\UserFriendRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserFriendController extends AppBaseController
{
    /** @var  UserFriendRepository */
    private $userFriendRepository;

    public function __construct(UserFriendRepository $userFriendRepo)
    {
        $this->userFriendRepository = $userFriendRepo;
    }

    /**
     * Display a listing of the UserFriend.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userFriendRepository->pushCriteria(new RequestCriteria($request));
        $userFriends = $this->userFriendRepository->all();

        return view('user_friends.index')
            ->with('userFriends', $userFriends);
    }

    /**
     * Show the form for creating a new UserFriend.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_friends.create');
    }

    /**
     * Store a newly created UserFriend in storage.
     *
     * @param CreateUserFriendRequest $request
     *
     * @return Response
     */
    public function store(CreateUserFriendRequest $request)
    {
        $input = $request->all();

        $userFriend = $this->userFriendRepository->create($input);

        Flash::success('User Friend saved successfully.');

        return redirect(route('userFriends.index'));
    }

    /**
     * Display the specified UserFriend.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userFriend = $this->userFriendRepository->findWithoutFail($id);

        if (empty($userFriend)) {
            Flash::error('User Friend not found');

            return redirect(route('userFriends.index'));
        }

        return view('user_friends.show')->with('userFriend', $userFriend);
    }

    /**
     * Show the form for editing the specified UserFriend.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userFriend = $this->userFriendRepository->findWithoutFail($id);

        if (empty($userFriend)) {
            Flash::error('User Friend not found');

            return redirect(route('userFriends.index'));
        }

        return view('user_friends.edit')->with('userFriend', $userFriend);
    }

    /**
     * Update the specified UserFriend in storage.
     *
     * @param  int              $id
     * @param UpdateUserFriendRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserFriendRequest $request)
    {
        $userFriend = $this->userFriendRepository->findWithoutFail($id);

        if (empty($userFriend)) {
            Flash::error('User Friend not found');

            return redirect(route('userFriends.index'));
        }

        $userFriend = $this->userFriendRepository->update($request->all(), $id);

        Flash::success('User Friend updated successfully.');

        return redirect(route('userFriends.index'));
    }

    /**
     * Remove the specified UserFriend from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userFriend = $this->userFriendRepository->findWithoutFail($id);

        if (empty($userFriend)) {
            Flash::error('User Friend not found');

            return redirect(route('userFriends.index'));
        }

        $this->userFriendRepository->delete($id);

        Flash::success('User Friend deleted successfully.');

        return redirect(route('userFriends.index'));
    }
}
