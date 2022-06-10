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

## # Test fixtures ( before | after )
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
## # Testing exceptions
## # Testing errors, warnings and notices