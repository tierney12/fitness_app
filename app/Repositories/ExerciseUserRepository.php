<?php

namespace App\Repositories;

use App\Models\ExerciseUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExerciseUserRepository
 * @package App\Repositories
 * @version November 23, 2018, 4:06 pm UTC
 *
 * @method ExerciseUser findWithoutFail($id, $columns = ['*'])
 * @method ExerciseUser find($id, $columns = ['*'])
 * @method ExerciseUser first($columns = ['*'])
*/
class ExerciseUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user',
        'exercise',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ExerciseUser::class;
    }
}
