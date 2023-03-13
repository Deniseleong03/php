<!DOCTYPE html>
<html>
<body>

<?php
$oddnumbers = array();

for ($num = 1; $num <= 100; $num++) {
    if ($num % 2 != 0) {
        array_push($oddnumbers, $num);
    }
}

print_r($oddnumbers);

?>
</body>
</html>
