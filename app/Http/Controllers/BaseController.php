<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @param $result
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    public function sendResponse($result, $message = "Your operation has been completed successfully!", $code = 200)
    {
        $response = [
            'status' => true,
            'status_code' => $code,
            'message' => $message,
            'payload' => $result,
        ];

        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @param $error
     * @param int $code
     * @return JsonResponse
     */
    public function sendError($error, $code = 422)
    {
        if (is_string($error)) {
            $response = [
                'status' => false,
                'status_code' => $code,
                'message' => 'Error! ',
                'payload' => ['error' => [$error]],
            ];
        } else {

            $response = [
                'status' => false,
                'status_code' => $code,
                'message' => 'Error! ',
                'payload' => $error,
            ];
        }

        return response()->json($response, $code);
    }


    /**
     * return error response.
     *
     * @param $error
     * @param int $code
     * @return JsonResponse
     */
    public function sendExp($error, $code = 500)
    {
        return response()->json([
            'status' => false,
            'status_code' => $code,
            'message' => $error,
            'payload' => null
        ], 500);

    }

}
