# Comments

Using comments is HIGHLY recommended, because when other people review the project's code, they will understand what a specific method/function/class/property/variable does or what's its functionality by reading the comments. Otherwise its really hard for them to figure out what's going on inside the code.


### Normal comments

Normal comments are comments that describes something in plain words. For example:

```php
/* This is a test code */

// test 

# test
```

Starting comments with `#` should be avoided, `//` is OK, and `/* ... */` is appreciated.

### Docblocks

Docblocks are special comments that is used to tell other programs (or even humans) in a specific syntax.
Example:

```php
<?php

namespace OSN\Standards;

/**
 * The main application class.
 * 
 * @author ABC XYZ <abc@xyz.com>
 * @package OSN\Standards
 */
class App {
    /*
     * The application name.
     *
     * @var string
     */
    protected $name;

    /*
     * Runs the application.
     *
     * @return bool
     */
    public function run()
    {
        // ...
    }
}
```

We prefer [phpDocumentor](https://www.phpdoc.org/)'s docblock syntax.

**Note**: Use a single asterisk `/* ... */` when writing a normal comment, and use double asterisks `/** ... */` when writing docblocks.