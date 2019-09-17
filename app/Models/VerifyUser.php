<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class VerifyUser
 * @package App\Models
 * @version November 23, 2018, 7:24 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection exercises
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer user_id
 * @property string token
 */
class VerifyUser extends Model
{
    use SoftDeletes;

    public $table = 'verify_users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    
}
