<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers DataProviderTest
 */
final class DataProviderTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }

    public function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [2, 3, 5],
            [1, 2, 3]
        ];
    }

    /**
     * @dataProvider subtractNamedProvider
     */
    public function testSubtractNamed(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a - $b);
    }

    public function subtractNamedProvider(): array
    {
        return [
            '3 minus 1' => [3, 1, 2],
            '5 minus 2' => [5, 2, 3],
        ];
    }
}