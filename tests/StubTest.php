<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers StubTest
 */
final class StubTest extends TestCase
{
    public function testStub(): void
    {
        $stub = $this->createStub(ExampleClass::class);
        $stub->method('getPet')->willReturn('Dog');
        $this->assertSame('Dog', $stub->getPet());
    }

    public function testStubWithMockBuilder(): void
    {
        $stub = $this->getMockBuilder(ExampleClass::class)
                ->disableOriginalConstructor()
                ->disableOriginalClone()
                ->disableArgumentCloning()
                ->disallowMockingUnknownTypes()
                ->getMock();

        $stub->method('getPet')->willReturn('Dog');
        $this->assertSame('Dog', $stub->getPet());
    }

    public function testStubThrowException(): void
    {
        $this->expectException('Exception');

        $stub = $this->createStub(ExampleClass::class);
        $stub->method('getPet')->will($this->throwException(new Exception));
        $stub->getPet();
    }
}

class ExampleClass {
    public function getPet(): string
    {
        return 'Cat';
    }
}