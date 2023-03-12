<!DOCTYPE html>
<html>
<body>

<?php
for ($i = 100; $i >= 1; $i--) {
    if ($i % 2 == 0) {
      continue; // skip even numbers
    }
    echo $i . "<br>"; // print odd numbers
  }
?>

</body>
</html>

