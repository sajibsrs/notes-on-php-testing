# # Installation and configuration

## # PHPUnit installation methods
There are two different ways for installing PHPUnit. Details on them could be found on its official [documentation](https://phpunit.de/getting-started/phpunit-9.html). We are going to use the **Composer** method, as it's the recommended way.

## # Installing composer
First we need to install **Composer**. Composer is a dependency manager for PHP. Which is similar to NPM for Node, RubyGems for Ruby and PIP for Python.

Instruction for installation can be found [here](https://getcomposer.org/download/).

## # Directory structure
This is just a sample directory structure. There is some important things to notice here. Under the project root directory we have `src` directory which contains the source code of our application. Also, we have `tests` directory which contains the tests.

The two directories `src` and `tests` are named following the convention. But you can name anything you want.

```sh
testing             # project root directory
--src               # project source code directory
  --Email.php
--tests             # project tests directory
  --EmailTest.php
  --StackTest.php
--composer.json
```

## # Installing PHPUnit
Next, we need to create a configuration file for composer. With a autoload directory and PHPUnit as development requirement. Then run `composer install`. There are other methods for configuring composer project, but this is convenient for our purpose.

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
After running the installation process, you can see there is an additional **vendor** directory has been added to the project. Which contains PHPUnit and other dependencies of the project.

## # Dumping autoload file
You may need to run following command:

```console
composer dump-autoload
```

## # Generating configuration file
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