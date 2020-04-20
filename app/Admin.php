<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends BaseModel
{
    protected $table = 'admin';
    protected $fillable = [
        'email', 'password', 'name',
    ];

    public static $rules = array(

    );

}
