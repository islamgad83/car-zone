<?php

namespace App\Http\Traits;
use Illuminate\Http\JsonResponse;
trait ApiResponse
{
    public static function successResponse( $data ,$message = "Success", $status = true, $code = 200)
    {
        return response()->json([
            'status' => $status,
           'message' =>  $message,
            'data' => $data
        ], $code );
    }

    public static function errorResponse($data, $message = "Failed Request",$status = false,   $code = 400)
    {
        return response()->json([
            'status' => $status,
            'message' =>  $message,
            'error' => $data
        ], $code );
    }


    public function returnError($errNum, $msg)
    {
        return response()->json([
            'status' => false,
            'errNum' => $errNum,
            'msg' => $msg
        ]);
    }

    public static function updatePassword( $data ,$message = "New Password is updated", $code = 200)
    {
        return response()->json([
            'message' =>  $message,
            'data' => $data
        ], $code );
    }

    public static function deleteWishlist( $data ,$message = "Successfully Product Remove", $code = 200)
    {
        return response()->json([
            'message' =>  $message,
        ], $code );
    }

    public static function notFound( $data ,$message = "Not Found This Product..!", $code = 200)
    {
        return response()->json([
            'status' => false,
            'message' =>  $message,
        ], $code );
    }

    public static function cartResponse($message = "Product has been added to cart", $status = true, $code = 200)
    {
        return response()->json([
            'status' => $status,
            'message' =>  $message,
        ], $code );
    }



    /**
     * Build error responses
     * @param  string|array $message
     * @param  int $code
     * @return Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function errorMessage($message, $code)
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}
