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

  $lastviewed = array();
  if(isset($_COOKIE["lv_1"])){
    $lv_1 = $_COOKIE["lv_1"];
    array_push($lastviewed, $lv_1);
  }
  if(isset($_COOKIE["lv_2"])){
    $lv_2 = $_COOKIE["lv_2"];
    array_push($lastviewed, $lv_2);
  }
  if(isset($_COOKIE["lv_3"])){
    $lv_3 = $_COOKIE["lv_3"];
    array_push($lastviewed, $lv_3);
  }
  if(isset($_COOKIE["lv_4"])){
    $lv_4 = $_COOKIE["lv_4"];
    array_push($lastviewed, $lv_4);
  }
  if(isset($_COOKIE["lv_5"])){
    $lv_5 = $_COOKIE["lv_5"];
    array_push($lastviewed, $lv_5);
  }
  echo "<h2>Last Viewed Services:</h2>";
  echo '<table class="zui-table">';
  echo "<tr>";
  echo "<th>#</th>";
  echo "<th>Title</th>";
  echo "</tr>";
  foreach ($lastviewed as $key => $value) {
    echo "<tr>";
    echo "<td>".($key+1)."</td>";
    echo "<td>".$value."</td>";
    echo "</tr>";
  }
  echo "</table>";

  $mostviewed = array();

  foreach ($services as $key => $value) {
    if(!getCount($value)){
      continue;
    }
    $mostviewed[$value] = getCount($value);
  }

  arsort($mostviewed);
  $index = 0;

  echo "<h2>Most Viewed Services:</h2>";
  echo '<table class="zui-table">';
  echo "<tr>";
  echo "<th>#</th>";
  echo "<th>Title</th>";
  echo "<th>Count</th>";
  echo "</tr>";
  foreach ($mostviewed as $key => $value) {
    echo "<tr>";
    echo "<td>".($index+1)."</td>";
    echo "<td>".$key."</td>";
    echo "<td>".$value."</td>";
    echo "</tr>";
    if($index==4){
      break;
    }
    $index++;
  }
  echo "</table>";

  function getCount($service){
    if(isset($_COOKIE[$service])){
      return $_COOKIE[$service];
    }
    else return false;
  }
  ?>
</body>
