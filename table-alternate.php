<!DOCTYPE html>
<html>
<head>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color:plum;
    }
  </style>
</head>
<body>
  <table>
    <?php
      for ($i = 1; $i <= 100; $i++) {
        echo "<tr><td>" . $i . "</td></tr>";
      }
    ?>
  </table>
</body>
</html>