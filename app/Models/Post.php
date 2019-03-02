<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function scopeOwnBy($query)
	{
		// is admin?
		if(auth()->user()->isAdmin()) {
			return $query;
		}

		return $query->where('user_id', auth()->user()->id);
	}

    public function user()
    {
    	return $this->belongsTo(\App\User::class); // user_id
    }
}
