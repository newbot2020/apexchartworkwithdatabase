<?php

$id=05;
$name= "Rockstar Mubin";
$roll=55;

echo (string)json_encode([
  "id"=>[1,2,3,4,5,6,7,8],
  "name"=>$name,
  "roll"=>$roll
]);
?>
