<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers \Subject
 * @uses \Observer
 */
final class SubjectTest extends TestCase
{
    public function testObserverAreUpdated(): void
    {
        $observer = $this->createMock(Observer::class);

        $observer->expects($this->once())
            ->method('update')
            ->with($this->equalTo('something'));

        $subject = new Subject('My subject');
        $subject->attach($observer);

        $subject->doSomething();
    }

    public function testFunctionCalledTwoTimesWithSpecificArguments(): void
    {
        $mock = $this->getMockBuilder(stdClass::class)
            ->addMethods(['set'])
            ->getMock();

        $mock->expects($this->exactly(2))
            ->method('set')
            ->withConsecutive(
                [$this->equalTo('foo'), $this->greaterThan(20)],
                [$this->equalTo('bar'), $this->greaterThan(45)]
            );

        $mock->set('foo', 21);
        $mock->set('bar', 48);
    }

    public function testErrorReported(): void
    {
        $observer = $this->createMock(Observer::class);

        $observer->expects($this->once())
            ->method('reportError')
            ->with(
                $this->greaterThan(0),
                $this->stringContains('Something'),
                $this->anything()
            );

        $subject = new Subject('My subject');
        $subject->attach($observer);

        $subject->doSomethingBad();
    }
}
