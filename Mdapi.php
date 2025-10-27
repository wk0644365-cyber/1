<?php
header('Content-type: application/json');
$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn=new mysqli($servername,$username,$password,$dbname);
$web="SELECT * FROM dribble";
$result=$conn->query($web);

$site=$result->num_rows;

for($i=0;$i<$site;$i++){

    $mydb[]=$result->fetch_assoc();

}

echo json_encode($mydb);
$conn->close();


