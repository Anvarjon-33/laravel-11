<?php

namespace App\Attributes;

#[\Attribute]
class Routes
{
    public string $path;
    public string $middleware = 'Example Middleware';

    public function __construct($path)
    {
        $this->path = $path;
    }
}
