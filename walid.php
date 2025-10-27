<?php

header('Content-Type: application/json');

$SQL = NEW mysqli("localhost","root","","test");

$c = "SELECT * FROM `dribble`"

$result = $SQL->query($c);

$count = $result->num_rows;

for ($i=0 $i<$count; $i++){
    $rows= $result->fetch_assoc();
    $student[]= $rows

}
echo-json_encode($student);
$c->close();
?>