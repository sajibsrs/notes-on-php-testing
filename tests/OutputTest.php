<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers OutputTest
 */
final class OutputTest extends TestCase
{
    public function testExpectOutputDog(): void
    {
        $this->expectOutputString('Dog');
        print 'Dog';
    }

    public function testExpectOutputCat(): void
    {
        $this->expectOutputString('Cat');
        print 'Cat';
    }
}
