<?php

namespace App\Repositories;

use App\Models\UserRequest;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserRequestRepository
 * @package App\Repositories
 * @version November 23, 2018, 4:05 pm UTC
 *
 * @method UserRequest findWithoutFail($id, $columns = ['*'])
 * @method UserRequest find($id, $columns = ['*'])
 * @method UserRequest first($columns = ['*'])
*/
class UserRequestRepository extends BaseRepository
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
        return UserRequest::class;
    }
}
