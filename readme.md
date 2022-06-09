# # PHP Testing

## # PHPUnit

### # Installation and configuration

#### # [PHPUnit installation methods](docs/phpunit-configuration.md#-phpunit-installation-methods)

#### # [Installing composer](docs/phpunit-configuration.md#-installing-composer)

#### # [Directory structure](docs/phpunit-configuration.md#-directory-structure)

#### # [Installing PHPUnit](docs/phpunit-configuration.md#-installing-phpunit)

#### # [Dumping autoload file](docs/phpunit-configuration.md#-dumping-autoload-file)

#### # [Generating configuration file](docs/phpunit-configuration.md#-generating-configuration-file)

### # Testing

#### # Testing with PHPUnit

#### # Running tests
* [Running test on project](docs/phpunit-running-test.md#-running-test-on-project)
* Running test on single file
* Running test on directory

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