# Twine -  The PHP common string manipulation tool

This library was created to standardize the bad naming convenstions of php string manipulation. The second goal was to create a library of commonly used string manipulation functions in one place and provide an OO wrapper.

## Installation
If you're using Composer to manage dependencies, you can include the following in your composer.json file:

```json
"require": {
    "rcleozier/Twine": "~0.1"
}
```
Then, after running `composer update` or `php composer.phar update`, you can
load the class using Composer's autoloading:

```php
require 'vendor/autoload.php';
```

Otherwise, you can simply require the file directly:

```php
require_once 'path/to/Twine/Twine.php';
```

And in either case, I'd suggest using an alias.


## Class methods

Below are some same usages below

```php
Twine::slugify("slug me") // returns slug-me
Twine::isValidUrl("http://www.github.com") // returns true
Twine::isValidEmail("coder@github.com") // return true
Twine::camelize("camel case this text") // returns camelCaseThisText
Twine::words("camel case this text") // returns 4. The number of words in the Twine::random(10); // returns random 10 character string
Twine::upper("string"); // returns STRING
Twine::length('words'); // returns 5
Twine::position('a word', 'a'); returns // 0
Twine::times('a cow and a bird', 'a'); // 2. returns times a word appears
```
