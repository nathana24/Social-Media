<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordGroup extends Model
{
    protected $fillable = [
        'user_id',
        'group_name'
    ];
}
