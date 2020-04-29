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
        'Get_Feedback_Admin' => [
            'page' => 'required|integer'
        ],
    ); 

    public static function getFeedbackAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return Feedback::join('users', 'feedback.user_id', '=', 'users.id')
        ->orderBy('feedback.updated_at','desc')
        ->limit($limit)
        ->offset($space)
        ->get();
    }
}
