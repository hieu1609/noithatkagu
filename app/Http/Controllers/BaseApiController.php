<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class BaseApiController extends Controller
{
    protected  $statusCode;
    protected  $result = [];
    protected  $apiError;

    public function __construct()
    {
        $this->result = [
            'error' => false,
            'data' => null,
            'errors' => []
        ];
        $this->statusCode = 200;
        $this->apiError = Lang::get('errorCodeApi');
    }
    private function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    private function setErrorResult($errors)
    {
        $this->result['error'] = true;
        $this->result['errors'] = $errors;
        return $this;
    }
    private function setSuccessResult($data)
    {
        $this->result['data'] = $data;
        return $this;
    }
    public function responseSuccess($data = array())
    {
        $this->setSuccessResult($data);
        return response()->json($this->result, $this->statusCode);
    }
    public function responseErrorValidator($errors = array(), $httpcode = 500)
    {
        $this->setStatusCode($httpcode);
        $this->setErrorResult($errors);
        return response()->json($this->result, $this->statusCode);
    }

    public function responseErrorException($errorMessage, $apicode = 99999, $httpcode = 500)
    {
        $this->setStatusCode($httpcode);
        $errors[0] = [
            'errorCode' => $apicode,
            'errorMessage' => $errorMessage
        ];
        $this->setErrorResult($errors);
        return response()->json($this->result, $this->statusCode);
    }
    public function responseErrorCustom($errorCode, $httpcode = 500)
    {
        $this->setStatusCode($httpcode);
        $errors[0] = [
            'errorCode' => $this->apiError['ApiErrorCodes'][$errorCode],
            'errorMessage' => $this->apiError['ApiErrorMessages'][$errorCode]
        ];

        $this->setErrorResult($errors);
        return response()->json($this->result, $this->statusCode);
    }
}
