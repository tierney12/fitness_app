<?php

namespace App\Repositories;

use App\Models\Exercise;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExerciseRepository
 * @package App\Repositories
 * @version November 23, 2018, 3:17 pm UTC
 *
 * @method Exercise findWithoutFail($id, $columns = ['*'])
 * @method Exercise find($id, $columns = ['*'])
 * @method Exercise first($columns = ['*'])
*/
class ExerciseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'units',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Exercise::class;
    }
}
