<?php

namespace App\Http\Controllers\Api;

trait ApiResponseTrait
{
    public function ApiResponse($data = null,$message = null,$status = null)
    {
        $array = [
            'message' => $message,
            'data' => $data,
            'status' => $status
        ];
        return response($array,$status);
    }
}
