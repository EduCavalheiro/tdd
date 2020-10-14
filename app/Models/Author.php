<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $guarded = [];

    protected $dates = ['dob'];

    public function setDobAttribute($attribute)
    {
        $this->attributes['dob'] = Carbon::parse($attribute);
    }
}
