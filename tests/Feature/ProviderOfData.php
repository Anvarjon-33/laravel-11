<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Exceptions;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\PreCondition;
use Tests\TestCase;

class ProviderOfData extends TestCase
{
    public static function additionProvider(): array
    {
        return [
            [1, 2, 3],
            [4, 5, 9],
            [6, 7, 13],
        ];
    }

    #[DataProvider('additionProvider')]
    public function test_data_provider_is_success(int $a, int $b, int $expected)
    {
        $this->assertSame($expected, $a + $b);
    }

    public static function additionProvider_1(): array
    {
        return [
            'adding zeros' => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one' => [1, 1, 2],
        ];
    }

    #[DataProvider('additionProvider_1')]
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
        //        $this->markTestIncomplete('Testing ...');
    }

    #[PreCondition]
    public function pre_condition_method(): void
    {
        echo '------------------------------------------';
    }

    public function testException(): void
    {
        Exceptions::fake();
        $this->get('__');
        $this->expectException(InvalidArgumentException::class);
    }
}
