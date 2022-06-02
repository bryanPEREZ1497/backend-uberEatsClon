<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class ModelNotFound extends Exception
{
    public static function render($request, Throwable $e)
    {
        return response()->json([
            'data' => null,
            'msg' => [
                'summary' => 'El registro no se encuentra en la base de datos',
                'detail' => '',
                'code' => '404',
            ]
        ], 404);
    }
}
