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
    'id_not_found' => 'The id user is not found.',
    'that_is_your_id' => 'The id user is your id.',
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

);

$ApiCodes['ApiErrorMessages'] = $ApiErrorMessages;
$ApiCodes['ApiErrorCodes'] = $ApiErrorCodes;

return $ApiCodes;
