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

## # Testing exceptions
## # Testing errors, warnings and notices
## # Test fixtures