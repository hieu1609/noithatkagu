<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends BaseModel
{
    protected $table = 'feedback';
    protected $fillable = [
        'user_id', 'title', 'content',
    ];

    public static $rules = array(

    );

}
