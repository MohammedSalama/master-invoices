<?php

namespace App\Http\Controllers\Api;

trait ApiResponseTrait
{
    /**
     * @param $data
     * @param $message
     * @param $status
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
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
