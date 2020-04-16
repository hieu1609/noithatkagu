<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends BaseApiController
{
    /**
     * @SWG\Post(
     *     path="/auth/login",
     *     description="Token will be return after login success",
     *     tags={"Auth"},
     *     summary="Login",
     *     @SWG\Parameter(
     *          name="body",
     *          description="Login",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\Property(
     *                  property="email",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="password",
     *                  type="string",
     *              )
     *          ),
     *      ),
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=400, description="Bad request"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=404, description="Not Found"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     *
     */
    public function login(Request $request)
    {
        try {
            $validator = User::validate($request->all(), 'Rule_Signin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $user = User::where(['email' => $request->email])->first();
            if (!$user) {
                return $this->responseErrorCustom("user_email_or_password_incorrect", 401);
            }

            if ($request->admin) {
                if (!$user->admin) {
                    return $this->responseErrorCustom("user_priority", 403);
                }
                $credentials = $request->only('email', 'password', 'admin');
            } else {
                $credentials = $request->only('email', 'password');
            }

            //create token
            $token = JWTAuth::attempt($credentials);
            if (!$token) {
                return $this->responseErrorCustom("user_email_or_password_incorrect", 401);
            }

            $result = [
                'user' => $user,
                'token' => $token,
            ];
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
}
