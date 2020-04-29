<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends BaseModel
{
    protected $table = 'notification';
    protected $fillable = [
        'user_id_receive', 'title', 'content'
    ];

    public static $rules = array(
        'Post_Feedback' => [
            'feedbackTitle' => 'required|string|max:50',
            'feedbackContent' => 'required|string|max:2000'
        ],
        'Send_Notification' => [
            'userId' => 'required|integer',
            'notificationTitle' => 'required|string|max:50',
            'notificationContent' => 'required|string|max:2000'
        ],
        'Send_Notification_All_Users' => [
            'notificationTitle' => 'required|string|max:50',
            'notificationContent' => 'required|string|max:2000'
        ],
        'Edit_Notification' => [
            'notificationId' => 'required|integer',
            'userIdReceive' => 'required|integer',
            'notificationTitle' => 'required|string|max:50',
            'notificationContent' => 'required|string|max:2000',
        ],
        'Delete_Notification' => [
            'notificationId' => 'required|integer'
        ],
        'Get_Notifications_Admin' => [
            'page' => 'required|integer'
        ],
        'Get_Notifications' => [
            'page' => 'required|integer'
        ],
    );

    public static function getNotificationsAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return Notification::join('users', 'notification.user_id_receive', '=', 'users.id')
        ->orderBy('notification.id', 'desc')
        ->limit($limit)
        ->offset($space)
        ->get(['notification.*', 'users.name', 'users.admin']);
    }

    public static function getNotifications($idUser, $page) {
        $limit = 5;
        $space = ($page - 1) * $limit;
        return Notification::where('user_id_receive', $idUser)
        ->orderBy('id', 'desc')
        ->limit($limit)
        ->offset($space)
        ->get();
    }
}
