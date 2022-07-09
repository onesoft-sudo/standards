# Block Statements

While using if condition, it is better to always surround the block of code with curly braces, even it is a one-line block. The opening brace should start in the same line where the if condition is written, and the closing brace should be in a new line. 
Same thing applies to loops, switch statements, match statements, closures... etc.

When writing classes, functions, methods, always keep the curly braces in a new line. The parameters of the functions/methods should be written in one line.

### Closure

If a closure function has only one line and returns something, then it is better to use the `fn()` arrow function syntax. Example:

```php
$arr = [1, 2, 3, 4, 5];

// NOT recommended
$filtered = array_filter($arr, function ($n) {
    return $n <= 3;
});

// Recommended
$filtered = array_filter($arr, fn($n) => $n <= 3);
```

### Methods

While writing methods in classes, it is better to provide an access modifier.

### Constructors

It is highly recommended to use the "Constructor Property Promotion" feature introduced in PHP 8.0. Also, the constructor must have the `public` modifier.