<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers ExceptionTest
 */
final class ExceptionTest extends TestCase
{
    public function testInvalidArgumentException(): void
    {   
        $this->expectException(InvalidArgumentException::class);
        throw new InvalidArgumentException();
    }

    public function testDeprecated(): void
    {
        $this->expectDeprecation();
        trigger_error('deprecated', E_USER_DEPRECATED);
    }

    public function testNotice(): void
    {
        $this->expectNotice();
        trigger_error('notice', E_USER_NOTICE);
    }

    public function testWarning(): void
    {
        $this->expectWarning();
        trigger_error('warning', E_USER_WARNING);
    }
}
