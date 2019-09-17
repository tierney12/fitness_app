<?php

namespace App\Models;

use Eloquent as Model;
use App\Traits\CreateAndUpdateTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Routine
 * @package App\Models
 * @version November 23, 2018, 4:03 pm UTC
 *
 * @property \App\User user
 * @property \App\Models\Exercise exercise
 * @property \Illuminate\Database\Eloquent\Collection exercises
 * @property \Illuminate\Database\Eloquent\Collection RoutinesUser
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string name
 * @property string description
 * @property integer ex1
 * @property integer ex1_num
 * @property integer ex2
 * @property integer ex2_num
 * @property integer ex3
 * @property integer ex3_num
 * @property integer ex4
 * @property integer ex4_num
 * @property integer ex5
 * @property integer ex5_num
 * @property integer created_by
 * @property integer updated_by
 */
class Routine extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'routines';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'ex1' => 'integer',
        'ex1_num' => 'integer',
        'ex2' => 'integer',
        'ex2_num' => 'integer',
        'ex3' => 'integer',
        'ex3_num' => 'integer',
        'ex4' => 'integer',
        'ex4_num' => 'integer',
        'ex5' => 'integer',
        'ex5_num' => 'integer',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function routinesUsers()
    {
        return $this->hasMany(\App\Models\RoutinesUser::class);
    }
}
