<?php

namespace App\Repositories;

use App\Models\RoutineUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RoutineUserRepository
 * @package App\Repositories
 * @version November 23, 2018, 7:07 pm UTC
 *
 * @method RoutineUser findWithoutFail($id, $columns = ['*'])
 * @method RoutineUser find($id, $columns = ['*'])
 * @method RoutineUser first($columns = ['*'])
*/
class RoutineUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user',
        'routine',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RoutineUser::class;
    }
}
