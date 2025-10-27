<?php
header('Content-Type: application/json');

$c = new mysqli("localhost","root","","test");

$q="SELECT * FROM webstudents ";

$r= $c->query($q);

$count= $r->num_rows;

for($i=0;$i<$count;$i++){

    $row= $r->fetch_assoc();
  

    $mystudents[]= $row;

    
}

echo json_encode($mystudents);


$c->close();

