<?php
//database settings

$result = mysqli_query($connect, "select id, name, rank, tag from accounts");
$datag = array();

while ($row = mysqli_fetch_array($result)) {
  $datag[] = $row;
}
    print json_encode($datag);

?>