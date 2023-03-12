<!DOCTYPE html>
<html>
<body>

<?php
$num_array = array(1);

for ($i = 1; $i < 10; $i++) {
    $prev_num = $num_array[$i-1];
    $curr_num = $prev_num * 2;
    array_push($num_array, $curr_num);
}
print_r($num_array);
?>
</body>
</html>     