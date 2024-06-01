<?php

namespace App\Attributes;

#[\Attribute(\Attribute::TARGET_METHOD)]
class POST
{
    public function __construct(public string $path)
    {
    }
}
