<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers SimpleTest
 */
class SimpleTest extends TestCase
{
    public function testSimpleTest(): void
    {
        $arr = [];

        $this->assertTrue(empty($arr));
        
        $this->assertSame([], $arr);
        
        $this->assertSame(0, count($arr));

        array_push($arr, 'Dog');

        $this->assertSame(1, count($arr));

        $this->assertFalse(empty($arr));
    }
}
