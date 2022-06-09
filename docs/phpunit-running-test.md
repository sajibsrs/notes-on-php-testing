# # PHPUnit Running Tests

##  # Running test on project
To run tests execute the following command:

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

## # Running test on single file
## # Running test on directory