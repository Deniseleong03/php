<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;
$total = 0;

while ($i <= 100) {
  $total += $i;
  $i++;
}

echo "The total sum of numbers from 1 to 100 is: " . $total;
?>  

</body>
</html>