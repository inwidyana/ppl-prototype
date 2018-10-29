<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'budget_by', 'ammount_by_specified',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function spending() {
        return $this->hasMany('App\Spending');
    }
}
