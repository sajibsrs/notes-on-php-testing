# # Writing tests in PHPUnit
## # Writing a simple test
```php
<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

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
```

## # Testing with dependency
```php
<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

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
```

## # Testing with data providers
```php
<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

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
```
*Note: Iterable can be used as data provider. Also, multiple data provider can be used in a single test.*

## # Testing exceptions, errors, warnings and notices
```php
<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

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
```

## # Testing output
```php

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
```

## # Test fixtures
* setUp()
* tearDown()
* setUpBeforeClass()
* tearDownAfterClass()