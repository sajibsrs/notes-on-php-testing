<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers \DependencyTest
 */
final class DependencyTest extends TestCase
{
    public function testProducerFirst(): string
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond(): string
    {
        $this->assertFalse(false);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer(string $val1, string $val2): void
    {
        $this->assertSame('first', $val1);
        $this->assertSame('second', $val2);
    }
}