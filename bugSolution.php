The safest way to access array elements in PHP is to always check if the key exists before attempting to access it.  This can be accomplished using `isset()` or `array_key_exists()`. Here's the corrected version:

```php
$myArray = ['a' => 1, 'b' => 2];

if (isset($myArray['c'])) {
  $value = $myArray['c'] * 2;
echo $value;
} else {
  echo "Key 'c' does not exist";
}

//Alternative using array_key_exists()
if (array_key_exists('c', $myArray)){
    $value = $myArray['c'] * 2;
    echo $value;
} else {
    echo "Key 'c' does not exist";
}
```

By using `isset()` or `array_key_exists()`, we avoid the potential for unexpected results caused by the silent `null` return value. The code now explicitly handles the case where the key doesn't exist, making the behavior more predictable and less prone to errors.