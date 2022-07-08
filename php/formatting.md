# Formatting

While formatting your code, it is recommended to use 4-spaced indents instead of tabs. Also, it is recommended to keep a `.editorconfig` file in the project root folder so that other people can also adjust their editors according to your configurations.

### PHP Tags

If you don't have raw HTML in your PHP file, it is highly recommended to keep only a opening `<?php` tag at the top, and no ending tag.
Example:

```php
<?php

namepace OSN\Standards;

class StandardClass
{
    // ...
}
```