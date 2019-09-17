<?php

namespace App\Repositories;

use App\Models\Routine;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RoutineRepository
 * @package App\Repositories
 * @version November 23, 2018, 4:03 pm UTC
 *
 * @method Routine findWithoutFail($id, $columns = ['*'])
 * @method Routine find($id, $columns = ['*'])
 * @method Routine first($columns = ['*'])
*/
class RoutineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'ex1',
        'ex1_num',
        'ex2',
        'ex2_num',
        'ex3',
        'ex3_num',
        'ex4',
        'ex4_num',
        'ex5',
        'ex5_num',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Routine::class;
    }
}
