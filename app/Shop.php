<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
