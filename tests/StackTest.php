<?php declare(strict_types=1);

use phpDocumentor\Reflection\DocBlock\Tags\Covers;
use PHPUnit\Framework\TestCase;

/**
 * @covers \StackTest
 */
final class StackTest extends TestCase
{
    public function testAssertsThatTheValueIsTrue(): bool
    {
        $this->assertTrue(true);
        return false;
    }

    /**
     * @depends testAssertsThatTheValueIsTrue
     */
    public function testAssertsThatTheValueIsFalse(bool $bla): void
    {
        $this->assertFalse($bla);
    }
}