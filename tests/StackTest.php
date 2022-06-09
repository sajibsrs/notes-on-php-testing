<?php declare(strict_types=1);

use phpDocumentor\Reflection\DocBlock\Tags\Covers;
use PHPUnit\Framework\TestCase;

/**
 * @covers \StackTest
 */
final class StackTest extends TestCase
{
    public function testOne(): bool
    {
        $this->assertTrue(true);
        return false;
    }

    /**
     * @depends testOne
     */
    public function testTwo(bool $bla): void
    {
        $this->assertFalse($bla);
    }
}