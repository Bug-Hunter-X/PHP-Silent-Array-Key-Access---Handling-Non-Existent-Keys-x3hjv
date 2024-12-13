# PHP Silent Array Key Access

This repository demonstrates a common yet often overlooked issue in PHP: the silent handling of non-existent array keys.  When accessing an array element with a key that doesn't exist, PHP returns `null` without issuing any errors or warnings. This can lead to unexpected behavior and difficult-to-track bugs, particularly when the `null` value is used in calculations or comparisons.

The `bug.php` file illustrates the problem, and `bugSolution.php` shows how to mitigate the issue by explicitly checking for the existence of keys using `isset()` or `array_key_exists()` before accessing them.

## How to Run

1. Clone this repository.
2. Navigate to the directory in your terminal.
3. Run the PHP files using your preferred method (e.g., `php bug.php`, `php bugSolution.php`).

## License

MIT License