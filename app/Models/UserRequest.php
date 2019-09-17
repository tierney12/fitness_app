<?php

namespace App\Models;

use Eloquent as Model;
use App\Traits\CreateAndUpdateTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserRequest
 * @package App\Models
 * @version November 23, 2018, 4:05 pm UTC
 *
 * @property \App\User user_id
 * @property \Illuminate\Database\Eloquent\Collection exercises
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer friend_id
 * @property integer created_by
 * @property integer updated_by
 */
class UserRequest extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'user-requests';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'friend_id',
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
        'friend_id' => 'integer',
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

}
