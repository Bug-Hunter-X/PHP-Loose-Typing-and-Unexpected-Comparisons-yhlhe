# PHP Loose Typing Gotcha

This example demonstrates a common pitfall in PHP: loose typing and unexpected comparisons.  The `foo()` function attempts to distinguish between `null`, `false`, `0`, '0', and empty string, but the loose comparison operators (`===` and `==`) can lead to unexpected results.  See the comments in `bug.php` and the solution in `bugSolution.php` for details.

This is a demonstration of a potential issue, but the solution provided is not necessarily universally applicable; it depends on your specific needs.  Always be mindful of how PHP treats type coercion.