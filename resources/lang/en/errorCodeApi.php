<?php

$ApiErrorMessages = array(
    // User Errors Message /
    'unauthorized' => 'The account is unauthorized.',
    'userId_required' => 'The user ID is required',
    'userId_integer' => 'The user ID is integer',
    'userId_min' => 'The user ID min is 1',
    'can_not_delete_user' => 'Can not delete user. Minimum admin is 1',
    'can_not_edit_user' =>  'Can not edit user. Minimum admin is 1',
    'middleware_users_not_found' => "The user was deleted from the system",
    'username_string' => 'The username must be string',

    'active_required' => 'The active field is required',
    'active_boolean' => 'The active field is boolean',

    // Validator Errors Message /
    'users_not_found' => 'The user is not found.',
    'users_not_create' => 'The user is not create.',
    'users_name_required' => 'The name is required.',
    'users_name_min' => 'The name must be at least 3 characters',
    'users_name_max' => 'The name may not be greater than 30 characters',
    'users_email_required' => 'The email is required.',
    'users_email_unique' => 'The email has already been taken.',
    'users_email_string' => 'The email must be a string.',
    'users_email_regex' => 'The email format is invalid.',
    'users_password_required' => 'The password is required.',
    'users_password_min' => 'The password must be at least 6 characters.',
    'users_password_max' => 'The password may not be greater than 16 characters.',
    'users_password_incorrect' => 'The password is incorrect.',
    'users_password_string' => 'The password must be a string.',
    'users_newPassword_required' => 'The new password is required.',
    'users_newPassword_min' => 'The new password must be at least 6 characters.',
    'users_newPassword_max' => 'The new password may not be greater than 16 characters.',
    'users_newPassword_string' => 'The new password must be a string.',
    'users_confirmNewPassword_required' => 'The confirm new password again is required.',
    'users_confirmNewPassword_min' => 'The confirm new password again must be at least 6 characters.',
    'users_confirmNewPassword_max' => 'The confirm new password again may not be greater than 16 characters.',
    'users_confirmNewPassword_string' => 'The confirm new password again must be a string.',
    'users_confirmNewPassword_same' => 'The confirm new password and new password must match.',
    'users_confirmPassword_required' => 'The confirm password again is required.',
    'users_confirmPassword_min' => 'The confirm password again must be at least 6 characters.',
    'users_confirmPassword_max' => 'The confirm password again may not be greater than 16 characters.',
    'users_confirmPassword_string' => 'The confirm password again must be a string.',
    'users_confirmPassword_same' => 'The confirm password and password must match.',
    'users_currentPassword_required' => 'The current password is required.',
    'users_currentPassword_min' => 'The current password must be at least 6 characters.',
    'users_currentPassword_incorrect' => 'The current password is incorrect',
    'users_currentPassword_max' => 'The current password may not be greater than 16 characters.',
    'users_currentPassword_string' => 'The current password must be a string.',
    'user_email_or_password_incorrect' => 'The email or password is incorrect',
    'name_required' => 'The name is required.',
    'name_string' => 'The name must be string.',
    'phone_required' => 'The phone number is required.',
    'phone_string' => 'The phone number must be string.',
    'phone_regex' => 'The phone number format is invalid.',
    'address_required' => 'The address is required.',
    'address_string' => 'The email must be string.',

    // Token Errors Message /
    'tokens_not_found' => 'The token is not found.',
    'tokens_not_create' => 'The token is not create.',
    'tokens_expired' => 'The token is expired.',
    'tokens_token_required' => 'The token is required.',
    'tokens_invalid' => 'The token is invalid.',
    'tokens_invalid_credentials' => 'The token is invalid credentials',

    'tokens_reset_password_not_found' => 'The token is not found.',
    'tokens_reset_password_not_create' => 'The token is not create.',
    'tokens_reset_password_expired' => 'The token is expired.',
    'tokens_reset_password_token_required' => 'The token is required.',
    'tokens_reset_password_invalid' => 'The token is invalid.',
    'tokens_reset_password_invalid_credentials' => 'The token is invalid credentials',

    'tokens_create_user_invalid' => 'The token is invalid. Please check email again',

    //custom error
    'email_password_invalid' => 'The email or password are invalid',
    'user_password_invalid' => 'The password is invalid', //when enter current password in change password
    'categoryId_required' => 'The category id is required.',
    'categoryId_integer' => 'The category id must be integer.',
    'category_id_not_found' => 'The category id is not found.',
    'page_required' => 'The page is required.',
    'page_integer' => 'The page must be integer.',
 
);

$ApiErrorCodes = array(

    // User Errors code: using 1xxx /
    'unauthorized' => 1000,
    'userId_required' => 1001,
    'userId_integer' => 1002,
    'userId_min' => 1003,
    'can_not_delete_user' => 1004,
    'can_not_edit_user' => 1005,
    'middleware_users_not_found' => 1006,

    'active_required' => 1007,
    'active_boolean' => 1008,

    // Validator Errors code: using 2xxx /
    'users_not_found' => 2001,
    'users_not_create' => 2002,
    'users_name_required' => 2010,
    'users_name_min' => 2011,
    'users_name_max' => 2012,
    'users_email_required' => 2020,
    'users_email_unique' => 2022,
    'users_email_string' => 2023,
    'users_email_regex' => 2024,
    'users_password_required' => 2040,
    'users_password_min' => 2041,
    'users_password_max' => 2042,
    'users_password_incorrect' => 2043,
    'users_password_string' => 2044,
    'users_newPassword_required' => 2050,
    'users_newPassword_min' => 2051,
    'users_newPassword_max' => 2052,
    'users_newPassword_string' => 2053,
    'users_confirmNewPassword_min' => 2061,
    'users_confirmNewPassword_max' => 2062,
    'users_confirmNewPassword_string' => 2063,
    'users_confirmNewPassword_required' => 2064,
    'users_confirmNewPassword_same' => 2065,
    'users_confirmPassword_min' => 2066,
    'users_confirmPassword_max' => 2067,
    'users_confirmPassword_string' => 2068,
    'users_confirmPassword_required' => 2069,
    'users_confirmPassword_same' => 2070,
    'users_currentPassword_required' => 2071,
    'users_currentPassword_min' => 2072,
    'users_currentPassword_max' => 2073,
    'users_currentPassword_string' => 2074,
    'users_currentPassword_incorrect' => 2075,
    'user_email_or_password_incorrect' => 2076,
    'name_required' => 2077,
    'name_string' => 2078,
    'phone_required' => 2079,
    'phone_string' => 2080,
    'phone_regex' => 2081,
    'address_required' => 2082,
    'address_string' => 2038,

    // Token Errors code: using 30xx /
    'tokens_not_found' => 3000,
    'tokens_not_create' => 3001,
    'tokens_expired' => 3002,
    'tokens_token_required' => 3003,
    'tokens_invalid' => 3004,
    'tokens_invalid_credentials' => 3005,

    'tokens_reset_password_not_found' => 3050,
    'tokens_reset_password_not_create' => 3051,
    'tokens_reset_password_expired' => 3052,
    'tokens_reset_password_token_required' => 3053,
    'tokens_reset_password_invalid' => 3054,
    'tokens_reset_password_invalid_credentials' => 3055,

    'tokens_create_user_invalid' => 3056,

    //custom error
    'email_password_invalid' => 8000,
    'user_password_invalid' => 8001,
    'categoryId_required' => 8002,
    'categoryId_integer' => 8003,
    'category_id_not_found' => 8004,
    'page_required' => 8005,
    'page_integer' => 8006,
    

);

$ApiCodes['ApiErrorMessages'] = $ApiErrorMessages;
$ApiCodes['ApiErrorCodes'] = $ApiErrorCodes;

return $ApiCodes;
