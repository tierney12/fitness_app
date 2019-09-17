<?php
/**
 * Created by PhpStorm.
 * User: rostislav
 * Date: 15.12.16
 * Time: 13:00.
 */

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait CreateAndUpdateTrait
{
    public static function bootCreateAndUpdateTrait()
    {
        static::creating(function ($model) {
            if (Auth::check()) {
                $model->created_by = Auth::user()->id;
                $model->updated_by = Auth::user()->id;
            }
        });
        static::updating(function ($model) {
            if (Auth::check()) {
                $model->updated_by = Auth::user()->id;
            }
        });
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'updated_by', 'id');
    }
}
