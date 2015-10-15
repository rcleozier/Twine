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


## Methods

Below are some same usages below

### lowerFirst()

Lowercase first character in a string

```php
Twine::lowerFirst("Lower case this")
```

### upperFirst()

Uppercase first first character in a string

```php
Twine::upperFirst("uppercase this string")
```

### upperWords()

Uppercase words in a string

```php
Twine::upperWords("uppercase these words")
```

### upper()

Uppercase an entire string

```php
Twine::upper("uppercase all of this")
```

### lower()

Lowercase an entire string

```php
Twine::lower("LOWERCASE ALL OF THIS")
```

### slug()

Alias for slugify()

```php
Twine::slug("slug me") // returns slug-me
```

### slugify()

Slugify a string.

```php
Twine::slugify("slug me") // returns slug-me
```

### unslugify()

Slugify a string.

```php
Twine::unslugify("unslug-me") // returns unslug me
```

### validUrl()

Validate an URL

```php
Twine::validUrl(http://www.github.com") // returns true;
```

### validEmail()

Validate an email address

```php
Twine::validEmail("coder@github.com") // returns true;
```

### camelize()

Camelcase a string

```php
Twine::camelize("camel case this text") // returns camelCaseThisText
```

### words()

Camelcase a string

```php
Twine::words("count the words in this text") // returns 5. The number of words
```

### reverse()

Reverse a string

```php
Twine::reverse("reversed this string") // returns reversed version
```

### length()

Returns the length of a string

```php
Twine::length("length of me")
```

### replace()

Replace part of a string with another

```php
Twine::replace("length of me", "replace it")
```

### position()

Returns the position of a string within another

```php
Twine::position("length of me", "me")
```

### toAscii()

Turns a key into the ascii equivilent

```php
Twine::toAscii("k")
```

### fromAscii()

Convert an Ascii character into the given key

```php
Twine::fromAscii(30)
```

### random()

Returns a random string of a specified length

```php
Twine::random(20) // returns a 20 character random string
```

### repeat()

Repeats a string a specified number of times.

```php
Twine::repeat("repeat me", 10); // Print repeats me 10 times
```

### similar()

Calculates the similarity between two strings.

```php
Twine::similar('a cow and a bird', 'a bird and a cow');
```

### shuffle()

Shuffles a string

```php
Twine::shuffle('a cow and a bird');
```

### occurence()

Alias of times()

```php
Twine::occurence('a cow and a bird', 'a'); // 2. returns times a word appears
```

### times()

Returns a the number of times a string appears in a sentence

```php
Twine::times('a cow and a bird', 'a'); // 2. returns times a word appears
```

### upper()

Uppercase a string

```php
Twine::upper("string"); // returns STRING
```

### lower()

Uppercase a string

```php
Twine::lower("STRING"); // returns string
```

### isIp()

Validates an IP Address

```php
Twine::isIp("127.0.0.2"); // returns true
```
