<?php

namespace App\Models;

use Eloquent as Model;
use App\Traits\CreateAndUpdateTrait;
use Illuminate\Database\Eloquent\SoftDeletes;



/**
 * Class Exercise
 * @package App\Models
 * @version November 23, 2018, 3:17 pm UTC
 * @property \App\User user
 * @property \Illuminate\Database\Eloquent\Collection ExercisesUser
 * @property \Illuminate\Database\Eloquent\Collection Routine
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string name
 * @property string description
 * @property string units
 * @property integer created_by
 * @property integer updated_by
 */
class Exercise extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'exercises';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'units',
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
        'name' => 'string',
        'description' => 'string',
        'units' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function exercisesUsers()
    {
        return $this->hasMany(\App\Models\ExercisesUser::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function routines()
    {
        return $this->hasMany(\App\Models\Routine::class);
    }

}
