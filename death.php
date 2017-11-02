<?php
//database settings
include_once('db.php');

$result = mysqli_query($connect, "select * from death ORDER BY fame LIMIT 10"); 
$data = array();
while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    print json_encode($data);

?>