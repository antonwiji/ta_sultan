<?php 

$json = '{"Anton" : "wiji", "Riki" : "Riski"}';
$decode = json_decode($json);


$value = get_object_vars($decode);

echo $value['Riki'];


?>