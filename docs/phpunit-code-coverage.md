# # PHPUnit Code Coverage

## # Running code coverage
You should have Xdebug installed to get code coverage report.

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