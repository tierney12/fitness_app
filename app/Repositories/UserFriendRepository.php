<?php

namespace App\Repositories;

use App\Models\UserFriend;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserFriendRepository
 * @package App\Repositories
 * @version November 23, 2018, 4:05 pm UTC
 *
 * @method UserFriend findWithoutFail($id, $columns = ['*'])
 * @method UserFriend find($id, $columns = ['*'])
 * @method UserFriend first($columns = ['*'])
*/
class UserFriendRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user',
        'friend',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserFriend::class;
    }
}
