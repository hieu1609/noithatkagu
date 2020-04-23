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
    'Send_Feedback' => [
        'title' => 'required|string|max:100',
        'content' => 'required|string|max:2000'
    ],
    );
    public static function getUserFeedback(){

    }
}
