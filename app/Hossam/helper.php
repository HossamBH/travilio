<?php
function successResponse($data = null, $message = null, $status = 200)
{
    return response()->json([
        'status' => 1,
        'message' => $message ?:'success',
        'data' => $data
    ], $status);
}
function failedResponse($data = null, $message = null, $status = 400)
{
    return response()->json([
        'status' => 0,
        'message' => $message ?:'failure',
        'data' => $data
    ], $status);
}
