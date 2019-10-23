<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task', 'user_id'];

    public function user() {
        return $this->hasOne('App/user');
    }
}
