<?php

namespace App\Models;

use Eloquent as Model;
use App\Traits\CreateAndUpdateTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RoutineUser
 * @package App\Models
 * @version November 23, 2018, 7:07 pm UTC
 *
 * @property \App\User user_id
 * @property \App\Models\Routine routine_id
 * @property \Illuminate\Database\Eloquent\Collection exercises
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer created_by
 * @property integer updated_by
 */
class RoutineUser extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'routines_users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'routine_id',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'routine_id' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function routine()
    {
        return $this->belongsTo(\App\Models\Routine::class);
    }
}

