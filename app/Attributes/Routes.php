<?php

namespace App\Attributes;

use Attribute;

#[Attribute]
class Routes
{
    public function __construct(public string $path, public string $method)
    {
    }

    public function getPath(): string
    {
        return $this->path;
    }
}
