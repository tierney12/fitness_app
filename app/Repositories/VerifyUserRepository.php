<?php

namespace App\Repositories;

use App\Models\VerifyUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VerifyUserRepository
 * @package App\Repositories
 * @version November 23, 2018, 7:24 pm UTC
 *
 * @method VerifyUser findWithoutFail($id, $columns = ['*'])
 * @method VerifyUser find($id, $columns = ['*'])
 * @method VerifyUser first($columns = ['*'])
*/
class VerifyUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VerifyUser::class;
    }
}
