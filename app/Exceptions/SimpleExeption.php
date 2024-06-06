<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class SimpleExeption extends Exception
{
    public function __construct(public $message, public $code = 0, Exception $previous = null)
    {
        parent::__construct($this->message, $this->code, $previous);
    }

    public function render(): JsonResponse
    {
        return response()->json([
            'error' => true,
            'message' => $this->message,
            'code' => $this->code,
        ]);
    }
}
