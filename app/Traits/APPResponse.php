<?php

namespace App\Traits;

trait APPResponse
{
    public function responseResult($message, $data = null, $statusCode, $isSuccess = true, $isAPI = false)
    {
        if ($isSuccess) {
            if ($isAPI) {
                return response()->json([
                    'message' => $message,
                    'error' => false,
                    'code' => $statusCode,
                    'result' => $data
                ], $statusCode);
            } else {
                return redirect()->back()->with('success', $message);
            }
        } else {
            if ($isAPI) {
                return response()->json([
                    'message' => $message,
                    'error' => true,
                    'code' => $statusCode
                ], $statusCode);
            } else {
                return redirect()->back()->with('error', $message);
            }
        }
    }

    public function success($message, $data, $statusCode = 200)
    {
        return $this->responseResult($message, $data, $statusCode);
    }

    public function error($message, $statusCode = 500)
    {
        return $this->responseResult($message, null, $statusCode, false);
    }
}
