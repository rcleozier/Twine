# PHP String Helper

## The PHP common string manipulation tool

This library was created to standardize the bad naming convenstions of php string manipulation. The second goal was to create a library of commonly used string manipulation functions in one place.

## Install String.php

To install String.php simply run `composer require rcleozier/string-php`.

```php
use StringManip\String;
```

## Using String.php

Below are some same usages below

```php
String::slugify("slug me") // returns slug-me
String::isValidUrl("http://www.github.com") // returns true
String::isValidEmail("coder@github.com") // return true
String::camelCase("camel case this text") // returns camelCaseThisText
String::words("camel case this text") // returns 4. The number of words in the string::random(10); // returns random 10 character string
```
