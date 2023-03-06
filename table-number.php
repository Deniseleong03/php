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
    
    th {
      background-color: #0074D9;
      color: white;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>Row</th>
      <th>Number</th>
    </tr>
    <?php
      for ($i = 1; $i <= 100; $i++) {
        echo "<tr><td>row" . $i . "</td><td>" . $i . "</td></tr>";
      }
    ?>
  </table>
</body>
</html>