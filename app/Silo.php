<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silo extends Model
{
    protected $table = 'silos';

    protected $fillable = ['name', 'channel_id', 'user_id'];

    /**
     * Return the user who is owner of this Silo
     */
    public function user() {
    	return $this->belongsTo(User::class);
    }
}
