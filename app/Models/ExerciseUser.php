<?php

namespace App\Models;

use Eloquent as Model;
use App\Traits\CreateAndUpdateTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ExerciseUser
 * @package App\Models
 * @version November 23, 2018, 4:06 pm UTC
 *
 * @property \App\User user_id
 * @property \App\Models\Exercise exercise_id
 * @property \Illuminate\Database\Eloquent\Collection exercises
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer number
 * @property integer created_by
 * @property integer updated_by
 */
class ExerciseUser extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'exercises_users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'exercise_id',
        'number',
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
        'exercise_id' => 'integer',
        'number' => 'integer',
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
    public function exercise()
    {
        return $this->belongsTo(\App\Models\Exercise::class);
    }

}
