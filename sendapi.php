<?php

$c = new mysqli("localhost","root","","test");

$data= json_decode(file_get_contents("php://input"),true);

$myName = $data["Dname"];
$myImg  = $data["Dimg_url"];

$myQ ="INSERT INTO dribble (name, img_url)
VALUES ('$myName', '$myImg')";

if($c->query($myQ)===TRUE){
 
   echo json_encode(["status"=>"saved"]); 

}
else{

   echo json_encode(["status"=>"Not saved"]); 
}
$c->close();
