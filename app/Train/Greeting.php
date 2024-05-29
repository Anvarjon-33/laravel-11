<?php

namespace App\Train;

class Greeting
{
    public function greeting(string $name): string
    {
        return "Hello {$name} !";
    }
}
