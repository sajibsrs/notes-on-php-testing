# # PHP Testing

## # Testing with PHPUnit

### # Configuration

#### # Installing composer

#### # Directory structure
```sh
testing             # project root directory
--src               # project source code directory
  --Email.php
--tests             # project tests directory
  --EmailTest.php
  --StackTest.php
--vendor
--composer.json
```

#### # Installing PHPUnit
```json
{   
    "autoload": {
        "classmap": [
            "src/"
        ]
    },
    "require-dev": {
        "phpunit/phpunit": "^9"
    }
}
```

#### # Generating autoload file
```console
composer dump-autoload
```

#### # Generating configuration file
```console
./vendor/bin/phpunit --generate-configuration
```

```sh
testing             # project root directory
--src               # project source code directory
  --Email.php
--tests             # project tests directory
  --EmailTest.php
  --StackTest.php
--vendor
--composer.json
--phpunit.xml       # newly generated configuration file
```

### # Testing
#### # Unit testing
```console
./vendor/bin/phpunit
```

Result would be something like this:
```console
PHPUnit 9.5.20 #####

Runtime:       PHP 8.1.2
Configuration: /###/###/phpunit.xml

.....                                                               5 / 5 (100%)

Time: 00:00.005, Memory: 6.00 MB

OK (5 tests, 5 assertions)
```

Alternatively, documented version of the test can be displayed by adding `--testdox` after `phpunit` command.
```console
./vendor/bin/phpunit --testdox
```

Result would be something like this:
```console
PHPUnit 9.5.20 #####

Runtime:       PHP 8.1.2
Configuration: /###/###/phpunit.xml

Email
 ✔ Can be created from valid email address [3.63 ms]
 ✔ Cannot be created from invalid email address [0.21 ms]
 ✔ Can be used as string [0.12 ms]

Stack
 ✔ Asserts that the value is true [1.09 ms]
 ✔ Asserts that the value is false [0.07 ms]

Time: 00:00.007, Memory: 6.00 MB

OK (5 tests, 5 assertions)
```

#### # Integration testing
#### # Code coverage
You should have Xdebug installed to get code coverage stats.

```console
XDEBUG_MODE=coverage ./vendor/bin/phpunit --coverage-text
```

Result would be something like this:
```console
PHPUnit 9.5.20 #####

Runtime:       PHP 8.1.2
Configuration: /###/###/phpunit.xml

.....                                                               5 / 5 (100%)

Time: 00:00.024, Memory: 8.00 MB

OK (5 tests, 5 assertions)


Code Coverage Report:   
  2022-06-09 11:22:46   
                        
 Summary:               
  Classes: 100.00% (1/1)
  Methods: 100.00% (4/4)
  Lines:   100.00% (7/7)

Email
  Methods: 100.00% ( 4/ 4)   Lines: 100.00% (  7/  7)
```

## # Xdebug

### # Step debugging
### # Improved PHP error reporting
### # Tracing
### # Profiling
### # Code coverage