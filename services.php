<body>
<link rel="stylesheet" type="text/css" href="table.css">
  <?php
  $services = array("service_0","service_1","service_2","service_3","service_4","service_5","service_6","service_7","service_8","service_9");
  echo "<h2>Services:</h2>";
  echo '<table class="zui-table">';
  echo "<tr>";
  echo "<th>#</th>";
  echo "<th>Title</th>";
  echo "<th>Link</th>";
  echo "</tr>";
  foreach ($services as $key => $value) {
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$value."</td>";
    echo '<td><a href="/services/'.$value.'.php">Link</a></td>';
    echo "</tr>";
  }
  echo "</table>";

  $lastViewed;
  ?>
</body>
