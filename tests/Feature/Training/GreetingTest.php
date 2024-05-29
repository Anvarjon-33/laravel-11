<?php declare(strict_types=1);

namespace Tests\Feature\Training;

use App\Train\Greeting;
use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    public function testGreetingWithName(): void
    {
        $greeting = new Greeting;
        $greeting_ = $greeting->greeting('Anvarjon');
        $this->assertEquals('Hello Anvarjon !', $greeting_);
    }
}
