<?php

namespace App\Attributes;

#[\Attribute(\Attribute::TARGET_METHOD)]
class GET
{
    public function __construct(public string $path)
    {
    }
}
