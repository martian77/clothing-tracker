<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothing extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'arrived', 'retired',
    ];

    /**
     * Returns the user that this item of Clothing belongs to.
     */
     public function user()
     {
       return $this->belongsTo('App\User');
     }
}
