<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordEntry extends Model
{

    protected $fillable = [
        'user_id',
        'url',
        'username',
        'password',
        'old_password',
        'managed_by',
        'notes'
    ];



}
