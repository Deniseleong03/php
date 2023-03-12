<!DOCTYPE html>
<html>
<body>

<?php
$original_array = array(34, 56.3, "Total", True, 365, 34.78, 99, 84, 3.3);
$sum = 0;

foreach ($original_array as $element) {
  if (is_int($element)) {
    $sum += $element;
  }
}

echo "The total sum of all integer numbers is: $sum";

?>
</body>
</html>